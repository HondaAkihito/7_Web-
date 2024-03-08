<template>
    <div class="container">
        <h2 class="mt-5 text-center">新規支出登録</h2>
        <form>
            <div class="form-group">
                <label for="spend_title">タイトル</label>
                <input type="text" class="form-control" id="spend_title" placeholder="支出のタイトルを入力">
            </div>
            <div class="form-group">
                <label for="spend_amount">支出金額</label>
                <input type="number" class="form-control" id="spend_amount" placeholder="新規支出金額を入力">
            </div>
            <div class="form-group">
                <label for="category-date">日付</label><br>
                <input type="date" id="spend_date">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">登録</button>
            </div>
        </form>
        <div class="container mt-5">
          <nav class="navbar">
            <table class="table border">
              <thead>
                <tr>
                  <th scope="col" class="text-center">日付</th>
                  <th scope="col" class="text-center">支出金額</th>
                  <th scope="col" class="text-center">タイトル</th>
                  <th scope="col" class="text-center"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">○~○</td>
                  <td class="text-center">0円</td>
                  <td class="text-center">タイトル</td>
                  <td class="text-center">
                    <button type="submit" class="btn btn-secondary">編集</button>
                    <button type="submit" class="btn btn-danger">削除</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </nav>
        </div>
    </div>
</template>

<script>
    export default {}
</script>
