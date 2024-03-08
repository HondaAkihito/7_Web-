<template>
    <div class="container">
        <h2 class="mt-5 text-center">予算登録</h2>
        <form>
            <div class="form-group">
                <label for="category-title">タイトル</label>
                <input type="text" class="form-control" id="category-title" placeholder="予算のタイトルを入力">
            </div>
            <div class="form-group">
                <label for="category-budget">予算</label>
                <input type="number" class="form-control" id="category-budget" placeholder="予算を入力">
            </div>
            <div class="form-group">
                <label for="category-date">期間</label><br>
                <input type="date" id="category-form_date"> ~ 
                <input type="date" id="category-to_date">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">登録</button>
            </div>
        </form>
        <form>
            <div class="text-right">
                <button type="submit" class="btn btn-danger">予算をリセットする</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {}
</script>
