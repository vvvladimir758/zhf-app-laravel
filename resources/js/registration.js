const App = {
  data(){
        return{
         name:'',
         surname:'',
         password:'',
         password_confirmation:'',
         email:'',
         data:'',
          errors: 
                   {name:'',
                     surname:'',
                     password:'',
                     password_confirmation:'',
                     email:'',
                     data:'',}
                ,
        };
    },

  created(){
 
  },

  methods:{
  submit(event){
  event.preventDefault();

 event.preventDefault();

   Object.entries(this.errors).forEach(([key, value]) => {
	
		this.errors[key] ='';
	});

let formData = new FormData(event.target);

const configHeaders = {
  "content-type": "application/json",
  "Accept": "application/json"
};

    axios.post('/register_vue',
    {
    name: this.name, 
    surname: this.surname, 
    password:this.password, 
    password_confirmation:this.password_confirmation,
    email:this.email
    },
    configHeaders
    )
        .then(response => {
        
        this.data = response.data.data;
        console.log(response); 
          window.location.href = '/';
        }
        )
        .catch(error => {
        console.log(error.response.data);

        Object.entries(error.response.data.errors).forEach(([key, value]) => {

               

               
               if (value instanceof Array){
               value.forEach((it)=>{
              this.errors[key] +=" "+ String(it); 
                });
               
               } 
           
 
       });
        
       console.log("ERRRR:: ",error.response.data)
        });
  
  
  }
  ,

       
  } 
}

Vue.createApp(App).mount('#registerForm')