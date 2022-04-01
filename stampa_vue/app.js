const app = new Vue({
  el : '#app',
  data : {
    discs : [],
    genreList : [],
    genre: '',
  },

  watch: {
    genre: function(newVal, oldVal){
      console.log(newVal, oldVal)
      this.fetchDiscs()
    }
  },

  methods: { 
    fetchDiscs: function(){
      axios.get('./db.php',{
        params: {
          genre: this.genre
        }
      })
      .then(res => {
        this.discs = res.data
        this.genreFilter(this.discs)
      })
    },

    genreFilter: function(discs){
      this.discs.forEach((el) => {
        const genre = el.genre
        if(!this.genreList.includes(genre)){
          this.genreList.push(genre);
        }
      });
    }
  },

  created() {
    
    this.fetchDiscs()
    
  }

})