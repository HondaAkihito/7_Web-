<template>
    <div class="container">
        <h2 class="mt-5 text-center">支出編集</h2>
        <form>
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" readonly v-model="spending.id">
            </div>
            <div class="form-group">
                <label for="category-title">タイトル</label>
                <input type="text" class="form-control" id="title" v-model="spending.title">
            </div>
            <div class="form-group">
                <label for="category-amount">支出金額</label>
                <input type="number" class="form-control" id="amount" v-model="spending.amount">
            </div>
            <div class="form-group">
                <label for="category-date">日付</label><br>
                <input type="date" id="date" v-model="spending.date">
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
        },
        data: function () {
            return {
                spending: {}
            }
        },
        methods: {
            getSpending() {
                axios.get('/api/spend/:spendId/edit/' + this.spendId)
                    .then((res) => {
                        this.spending = res.data;
                    });
            }
        },
        mounted() {
            this.getSpending();
        }
    }
</script>
