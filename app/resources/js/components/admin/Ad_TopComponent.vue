<template>
    <div class="container">
        <h2 class="mt-5 text-center">ユーザー一覧</h2>
        <div class="container mt-5">
            <form action="#" method="GET" class="form-inline justify-content-center">
                <div class="input-group mr-2">
                    <input type="text" class="form-control" placeholder="IDを入力">
                </div>
                <div class="input-group mr-2">
                    <input type="text" class="form-control" placeholder="メールを入力" name="keyword2">
                </div>
                <button type="submit" class="btn btn-primary">検索</button>
            </form>
        </div>
        <div class="container mt-5">
          <nav class="navbar">
            <table class="table border">
              <thead>
                <tr>
                  <th scope="col" class="text-center align-middle">ID</th>
                  <th scope="col" class="text-center align-middle">メール</th>
                  <th scope="col" class="text-center align-middle"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center align-middle">1</td>
                  <td class="text-center align-middle">sample@sample.com</td>
                  <td class="text-center align-middle">
                    <button class="btn btn-danger">削除</button>
                  </td>
                </tr>
                <tr>
                  <td class="text-center align-middle">2</td>
                  <td class="text-center align-middle">sample@sample.com</td>
                  <td class="text-center align-middle">
                    <button class="btn btn-danger">削除</button>
                  </td>
                </tr>
                <tr>
                  <td class="text-center align-middle">3</td>
                  <td class="text-center align-middle">sample@sample.com</td>
                  <td class="text-center align-middle">
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
    export default {
    }
</script>
