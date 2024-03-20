<template>
    <div class="container">
        <h2 class="mt-5 text-center">プロフィール画像更新</h2>
        <div class="form-group">
            <label for="id">↓下をクリックして画像をアップロードしてください</label><br>
            <input type="file" v-on:change="fileSelected">
        </div>
        <button v-on:click="fileUpload" class="btn btn-danger">アップロード</button>
        <p v-show="showUserImage"><img v-bind:src="user.file_path"></p>
    </div>
</template>

<script>
export default {
    data: function(){
        return {
          fileInfo: '',
          user: '',
          showUserImage: false
        }
    },
    methods:{
        fileSelected(event){
            this.fileInfo = event.target.files[0]
        },
        fileUpload(){
            const formData = new FormData()

            formData.append('file',this.fileInfo)

            axios.post('/api/profile/:profileId/edit',formData).then(response =>{
                this.user = response.data
                if(response.data.file_path) this.showUserImage = true
            });
        }
    }
}
</script>