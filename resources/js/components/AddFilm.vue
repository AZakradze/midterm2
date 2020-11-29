<template>
    <div class="add">
        <form method="post" action="http://127.0.0.1:8000/add/film"  enctype="multipart/form-data">
            <h2>Add film</h2>
            <label for="title">Enter title</label>
            <input id="title" v-model="data.title" type="text" name="title">
            <label for="url">Enter href</label>
            <input id="url" v-model="data.url" type="text" name="url">
            <label for="imdb">Enter Imdb</label>
            <input type="number" v-model="data.IMDB" id="imdb" name="IMDB">
            <label for="photo" >Featured picture</label>
            <input type="file"  id="photo" name="image">
            <label for="c">Choose category</label>
            <select name="category_id" id="">
                <option v-for="c in list" :value="c.id">{{c.title}}</option>
            </select>
            <label for="desc">Add desc</label>
            <textarea name="desc" v-model="data.desc" id="desc" cols="30" rows="10"></textarea>
            <button type="submit">Create</button>
        </form>
    </div>
</template>

<script>
export default {
    data(){
        return {
            list: [],
            data:{
                title: '',
                url: '',
                IMDB: '',
                img: 'imgs/hero.jpg',
                desc: '',
            }
        }
    },
    mounted() {
        fetch('http://127.0.0.1:8000/api/categories')
            .then(response => response.json())
            .then(data => this.list = data);        },
    methods: {
        addFilm: function (event) {
            console.log(this.data)
            fetch('http://127.0.0.1:8000/api/add/film',
                {
                    method: 'POST',
                    body: {title: this.data.title, url: this.data.url,
                        IMDB:this.data.IMDB, img: this.data.img, desc:  this.data.desc},
                    headers: {
                        'content-type': 'application/json'
                    }
                }
            )
            .then(response => response.json())
            .then(data => console.log(data))
        }
    }
}
</script>

<style scoped>
.add{
    width: 100%;
}
form{
    width: 100%;
    align-items: center;
}
label {
    display: block;
    margin-bottom: 10px;
    margin-top: 10px;
    font-weight: bold;
    font-size: 20px;
}
input{
    border: none;
    border-bottom: 1px solid black;
    padding: 5px 10px;
    width: 100%;
}
input:focus{
    outline: none;
}
textarea{
    width: 100%;
    resize: none;
    padding: 10px 20px;

}
input {
    display: block;
    padding: 10px 20px;
}
button {
    padding: 10px 20px;
    margin-top: 20px;
}
button:hover{
    background-color: grey;
}
</style>
