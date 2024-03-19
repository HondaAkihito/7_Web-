<template>
    <div class="container">
        <h2 class="mt-5 text-center">予算登録</h2>
        <form v-on:submit.prevent="submit">
            <div class="form-group">
                <label for="category-title">タイトル</label>
                <input type="text" class="form-control" id="title" placeholder="予算のタイトルを入力" v-model="budget.title">
            </div>
            <div class="form-group">
                <label for="category-budget">予算</label>
                <input type="text" class="form-control" id="amount" placeholder="予算を入力" v-model="budget.amount">
            </div>
            <div class="form-group">
                <label for="category-date">期間</label><br>
                <input type="date" id="from_date" v-model="budget.from_date"> ~ 
                <input type="date" id="to_date" v-model="budget.to_date">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">登録</button>
            </div>
        </form>
        <form>
            <div class="text-right">
                <router-link to="top">
                    <button type="submit" class="btn btn-danger" v-on:click="deleteBudgetSpending()">予算をリセットする</button>
                </router-link>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                budget: {}
            }
        },
        methods: {
            submit() {
                axios.post('/api/budget_create', this.budget)
                    .then((res) => {
                        this.$router.push({name: 'top'});
                    });
            },
            deleteBudgetSpending() {
                axios.delete('/api/budget_create')

            }
        }
    }
</script>
