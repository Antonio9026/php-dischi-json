const app = Vue.createApp({
data(){
    return{
        dischi:[],
    }
},
mounted(){
axios.get("dischi.php")
.then((response) => {
    this.dischi = response.data;
    console.log(response);
});
}


});
console.log(app);
app.mount("#app")
