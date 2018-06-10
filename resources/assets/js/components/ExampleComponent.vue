<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <ul class="list-group">
                            <li v-for="item in items" :key="item.Id" value="" class="list-group-item">{{item.Nombre}}<small class="float-right">Edad {{item.Edad}}</small></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'
    export default {
        data() {
            return {
                items: []
            }
        },
        mounted() {
            console.log('Component mounted.')
            this.GetItems();
        },
        methods: {
            GetItems() {
                axios.get('api/test')
                .then(res => {
                    this.items = res.data;
                })
            }
        }
    }
</script>
