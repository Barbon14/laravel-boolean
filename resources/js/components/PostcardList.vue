<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Postcard List</div>

                    <div class="card-body">
                        <ul>
                            <li v-for="postcard, i in postcardsList" :key="`postcard-${i}`">
                                {{ postcard.sender }} - 
                                {{ postcard.address }} - 
                                {{ postcard.text }}
                                <img 
                                :src="`storage/img/postcards/${postcard.image}`" 
                                alt="immagine non trovata"
                                width="200px">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {

                postcardsList: [],
            }
        },

        methods: {

            getPostcardList() {

                axios
                .get('/api/postcards/list')
                .then(r => this.postcardsList = r.data)
                .catch(e => console.error(e));
            }
        },
        mounted() {

            console.log('Component mounted.')

            this.getPostcardList();
        }
    }
</script>
