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
        <div class="container mt-5">
          <nav class="navbar">
            <table class="table border">
              <thead>
                <tr>
                  <th scope="col" class="text-center align-middle">ID</th>
                  <th scope="col" class="text-center align-middle">日付</th>
                  <th scope="col" class="text-center align-middle">支出金額</th>
                  <th scope="col" class="text-center align-middle">タイトル</th>
                  <th scope="col" class="text-center align-middle"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center align-middle">1</td>
                  <td class="text-center align-middle">○~○</td>
                  <td class="text-center align-middle">0円</td>
                  <td class="text-center align-middle">タイトル</td>
                  <td class="text-center align-middle">
                    <router-link v-bind:to="{name: 'spend.edit', params: {spendId: 1}}">
                      <button class="btn btn-secondary">編集</button>
                    </router-link>
                    <button class="btn btn-danger">削除</button>
                  </td>
                </tr>
                <tr>
                  <td class="text-center align-middle">2</td>
                  <td class="text-center align-middle">○~○</td>
                  <td class="text-center align-middle">0円</td>
                  <td class="text-center align-middle">タイトル</td>
                  <td class="text-center align-middle">
                    <router-link v-bind:to="{name: 'spend.edit', params: {spendId: 2}}">
                        <button class="btn btn-secondary">編集</button>
                    </router-link>
                    <button class="btn btn-danger">削除</button>
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
