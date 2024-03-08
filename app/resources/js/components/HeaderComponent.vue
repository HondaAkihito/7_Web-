<template>
    <div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-dark">
                <span class="navbar-brand mb-0 h1">Budget Management</span>
                <div>
                    <router-link v-bind:to="{name: 'budget.create'}">
                        <button class="btn btn-success">予算登録</button>
                    </router-link>
                    <button class="btn btn-success">支出登録</button>
                    <button class="btn btn-success">マイページ</button>
                </div>
            </nav>
        </div>
    </div>
</template>

<script>
    export default {}
</script>
