<template>
    <div class="container">
        <h2 class="mt-5 text-center">支出編集</h2>
        <form>
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" readonly v-bind:value="spendId">
            </div>
            <div class="form-group">
                <label for="category-title">タイトル</label>
                <input type="text" class="form-control" id="title">
            </div>
            <div class="form-group">
                <label for="category-budget">支出金額</label>
                <input type="number" class="form-control" id="budget">
            </div>
            <div class="form-group">
                <label for="category-date">日付</label><br>
                <input type="date" id="date">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">更新</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        props: {
            spendId: String
        }
    }
</script>
