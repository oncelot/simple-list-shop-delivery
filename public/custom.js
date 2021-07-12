var app = new Vue({
    el: '#app',
    created() {
        this.fetchData();
    },
    data: {
        messaggio: 'Hello Vue!',
        tipo:'all',
        citta:'all',
        isActive:true,
        cerca:'',
        dati:'',
		nessuno:false,
        posts:[]
    } ,methods: {
        fetchData() {
        axios.get('/api/lista-attivita').then(response => {
            this.posts = response.data;
            });
        }
    },
    computed: {
        filteredList() {
          var attivita= this.posts.filter(post => {

            if (this.tipo == 'all' &&  this.citta != 'all'){  
			return post.nome.toLowerCase().includes(this.cerca.toLowerCase())  &&  post.citta.includes(this.citta)}
            if (this.citta == 'all' && this.tipo != 'all' ){  
			return post.nome.toLowerCase().includes(this.cerca.toLowerCase()) && post.attivita.includes(this.tipo) }
			if (this.citta != 'all' && this.tipo != 'all' ){  
			return post.nome.toLowerCase().includes(this.cerca.toLowerCase()) && post.attivita.includes(this.tipo) &&  post.citta.includes(this.citta) }
 if (this.citta == 'all' && this.tipo == 'all'){  return post.nome.toLowerCase().includes(this.cerca.toLowerCase())

                }

          });
		  if (attivita.length == "0"){this.nessuno=true;

        }else{
            this.nessuno=false;
            return attivita}

        }
      }
  })
