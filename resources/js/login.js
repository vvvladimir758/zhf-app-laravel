const App = {
  data(){
        return{
         password:'',
         email:'',
         data:'',
          errors: 
                   {
                     password:'',
                     email:'',
                    }
                ,
        };
    },

  created(){
 
  },

  methods:{
  submit(event){
	
	
  event.preventDefault();

   Object.entries(this.errors).forEach(([key, value]) => {
	
	this.errors[key] ='';
});

let formData = new FormData(event.target);

const configHeaders = {
  "content-type": "application/json",
  "Accept": "application/json"
};

    axios.post('/login_vue',
    {
    password:this.password, 
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
        console.log( Array.from(error.response.data))
        Object.entries(error.response.data.errors).forEach(([key, value]) => {
               console.log(value);
               

               
               if (value instanceof Array){
               value.forEach((it)=>{
               
               console.log(String(it));

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

Vue.createApp(App).mount('#loginForm')