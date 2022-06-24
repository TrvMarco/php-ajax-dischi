const app = new Vue({
    el: "#app",
    data:{
        
    },
    created(){
        axios.get('http://localhost/php-ajax-dischi/server/api.php')
        .then(function (response) {
            console.log(response.data);
        })
        .catch(function (error) {
            console.log(error);
        })
    }
})