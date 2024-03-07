<template>
    <div class="container-fluid bg-dark mb-3">
        <div class="container">
            <nav class="navbar navbar-dark">
                <span class="navbar-brand mb-0 h1">Budget Management</span>
                <div>
                    <router-link v-bind:to="{name: 'task.create'}">
                        <button class="btn btn-success">マイページ</button>
                    </router-link>
                </div>
            </nav>
        </div>
    </div>
</template>

<script>
    export default {}
</script>
