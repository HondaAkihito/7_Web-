<template>
    <div class="container">
        <h2 class="mt-5 text-center">エラーです</h2>
        <div class="text-center">
            <router-link v-bind:to="{name: 'top-component'}">
                <button type="submit" class="btn btn-primary mt-3">トップページへ</button>
            </router-link>
        </div>
    </div>
</template>

<script>
    export default {}
</script>
