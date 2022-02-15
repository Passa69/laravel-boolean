<template>
    <div class="container">
        <table border="1">
            <tr>
                <th>Sender</th>
                <th>Text</th>
                <th>Address</th>
                <th>Img</th>
            </tr>
            <tr v-for="postcard in postcards" :key="postcard">
                <td>{{postcard.sender}}</td>
                <td>{{postcard.text}}</td>
                <td>{{postcard.address}}</td>
                <td>
                    <img v-if="postcard.img" :src="'/storage/postcards/' + postcard.img" width="100px">
                    <p v-else>no image</p>
                </td>
            </tr>

        </table>
    </div>
</template>

<script>
    export default {
        data() {

            return {

                postcards: []
            };
        },
        mounted() {
            
            axios.get('/api/postcards/list')
                 .then(r => this.postcards = r.data)
                 .catch(e => console.error(e));
        }
    }
</script>
