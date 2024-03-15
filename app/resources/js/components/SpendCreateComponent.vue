<template>
    <div class="container">
        <h2 class="mt-5 text-center">新規支出登録</h2>
        <form v-on:submit.prevent="submit">
            <div class="form-group">
                <label for="category-title">タイトル</label>
                <input type="text" class="form-control" id="title" placeholder="予算のタイトルを入力" v-model="spending.title">
            </div>
            <div class="form-group">
                <label for="category-amount">支出金額</label>
                <input type="number" class="form-control" id="amount" placeholder="予算を入力" v-model="spending.amount">
            </div>
            <div class="form-group">
                <label for="category-date">日付</label><br>
                <input type="date" id="date" v-model="spending.date">
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
                <tr v-for="spending in spendings" :key="index">
                  <td class="text-center align-middle">{{ spending.id }}</td>
                  <td class="text-center align-middle">{{ spending.date }}</td>
                  <td class="text-center align-middle">{{ spending.amount }}</td>
                  <td class="text-center align-middle">{{ spending.title }}</td>
                  <td class="text-center align-middle">
                    <router-link v-bind:to="{name: 'spend.edit', params: {spendId: spending.id}}">
                      <button class="btn btn-secondary">編集</button>
                    </router-link>
                    <button class="btn btn-danger" v-on:click="deleteSpending(spending.id)">削除</button>
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
        data: function () {
            return {
                spendings: [],
                spending: {}
            }
        },
        methods: {
              getSpendings() {
                  axios.get('/api/spend/create')
                    .then((res) => {
                          this.spendings = res.data;
                    });
              },
              submit() {
                  axios.post('/api/spend/create', this.spending)
                      .then((res) => {
                          this.$router.push({name: 'top'});
                      });
              },
              deleteSpending(id) {
                  axios.delete('/api/spend/create/' + id)
                      .then((res) => {
                          this.getSpendings();
                      });
              }
        },
        mounted() {
              this.getSpendings();
        }
    }


</script>
