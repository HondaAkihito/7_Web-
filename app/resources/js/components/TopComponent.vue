<template>
    <div class="container-fluid mb-3">
        <div class="container">
            <nav class="navbar">
                <table class="table border">
                  <thead>
                    <tr>
                      <th scope="col" class="text-center">期間</th>
                      <th scope="col" class="text-center">予算</th>
                      <th scope="col" class="text-center">残り</th>
                      <th scope="col" class="text-center">OK/day</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="budget in budgets" :key="index">
                      <td class="text-center">{{ budget.from_date }} ~ {{ budget.to_date }}</td>
                      <td class="text-center">{{ budget.amount }}</td>
                      <td class="text-center">{{ budget.rest_amount }}</td>
                      <td class="text-center">{{ budget.day_amount }} / day</td>
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
                budgets: []
            }
        },
        methods: {
            getBudgets() {
                axios.get('/api/top')
                    .then((res) => {
                            this.budgets = res.data;
                    });
            }
        },
        mounted() {
              this.getBudgets();
        }
    }
</script>