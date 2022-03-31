const app = new Vue({
  el : '#app',
  data : {
    discs : []
  },

  methods: { 
    fetchDiscs: function(){
      axios.get('./db.php')
      .then(res => {
        this.discs = res.data
        console.log(res)
      })
    }
  },

  created() {
    
    this.fetchDiscs()
    
  }

})