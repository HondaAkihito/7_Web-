<template>
    <div class="container">
        <h2 class="mt-5 text-center">新規支出登録</h2>
        <form>
            <div class="form-group">
                <label for="category-title">タイトル</label>
                <input type="text" class="form-control" id="title" placeholder="予算のタイトルを入力">
            </div>
            <div class="form-group">
                <label for="category-budget">支出金額</label>
                <input type="number" class="form-control" id="budget" placeholder="予算を入力">
            </div>
            <div class="form-group">
                <label for="category-date">日付</label><br>
                <input type="date" id="date">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">登録</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {}
</script>
