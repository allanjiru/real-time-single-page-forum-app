import AppStorage from "./AppStorage";
import Token from "./Token";

class User{
    login(data){
        axios.post('/api/auth/login',data)
        .then(res=>{
            this.responseAfterLogin(res);
        })
        .catch(err=>{
            console.log(err.response.data);
        })
    }

    responseAfterLogin(res){
        const access_token = res.data.access_token;
        const username = res.data.user;
        if(Token.isValid(access_token)){
            AppStorage.store(access_token,username);
        }
    }

    hasToken(){
        const storedToken = AppStorage.getToken();
        if(storedToken){
            return Token.isValid(storedToken) ? true : false
        }else{
            return false;
        }
    }

    loggedin(){
       return this.hasToken();
    }

    logout(){
        AppStorage.clear();
    }

    name(){
        if(this.loggedin){
            return AppStorage.getUser();
        }
    }

    id(){
        if(this.loggedin){
            const payload = Token.payload(AppStorage.getToken());
            return payload.sub 
        }
    }
}

export default User = new User()