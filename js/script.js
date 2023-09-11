const app = Vue.createApp({
data(){
    return{
        dischi:[]
    }
},
mounted(){
axios.get("http://localhost/php-dischi-json/php-dischi-json/dischi.php")
.then((response) => {
    this.dischi = response.data;
});
}


});
console.log(app);
app.mount("#app")
