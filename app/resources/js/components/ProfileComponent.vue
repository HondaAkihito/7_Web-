<template>
    <div class="container">
        <h2 class="mt-5 text-center">プロフィール</h2>
        <form v-for="(profile, index) in profiles" :key="index">
            <div class="profile-picture mx-auto mt-3">
                <img src="../../honaki_assets/sample.jpg" class="img-fluid" alt="Profile Picture">
            </div>
            <router-link v-bind:to="{name: 'profile.file.edit'}">
                <div class="mb-5 text-center"><button type="submit" class="btn btn-primary">編集</button></div>
            </router-link>
            <div class="form-group">
                <label for="id">名前</label>
                <input type="text" class="form-control" id="name" readonly v-model="profile.name">
            </div>
            <div class="form-group ">
                <label for="id">メールアドレス</label>
                <input type="text" class="form-control" id="email" readonly v-model="profile.email">
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                profiles: []
            }
        },
        methods: {
            getProfiles() {
                axios.get('/api/profile')
                    .then((res) => {
                        this.profiles = res.data;
                    });
            }
        },
        mounted() {
            this.getProfiles();
        }
    }
</script>