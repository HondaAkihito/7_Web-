<template>
    <div class="container">
        <h2 class="mt-5 text-center">プロフィール</h2>
        <form>
            <div class="profile-picture mx-auto mt-3">
                <img src="../../honaki_assets/sample.jpg" class="img-fluid" alt="Profile Picture">
            </div>
            <div class="mb-5 text-center"><button type="submit" class="btn btn-primary">編集</button></div>
            <div class="form-group ">
                <label for="id">メールアドレス</label>
                <input type="text" class="form-control" id="email" readonly value="Sample@gmail.com">
            </div>
            <div><button type="submit" class="btn btn-danger">ログアウト</button></div>
        </form>
    </div>
</template>

<script>
    export default {}
</script>