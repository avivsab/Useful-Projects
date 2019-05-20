 
        const state = {
            user: null,
            users:[]
        };
        
        function loadUser() {
            const URL = 'https://randomuser.me/api/';
            const requestUser = fetch(URL);
            requestUser.catch(() => alert('error reaching the API'));
            const getUserJSON = requestUser.then(response => response.json());
            getUserJSON.then(data => {
                state.user = data.results[0];
                state.users.push(data.results[0])
            });
        };
        
        loadUser();
        
        const container = document.getElementsByClassName('container')[0];
        document.querySelector('.getUser').onclick = () => {
            console.log(state.user);         
            loadUser();          
              const user = `
                <div class="col s12 m8 offset-m2 8 offset-l3">
                  <div class="card-panel grey lighten-5 z-depth-1">
                    <div class="row valign-wrapper">
                      <div class="col s2">
                        <img src="${state.user.picture.medium}" alt="Random user" class="circle responsive-img"> 
                      </div>
                      <div class="col s10">
                        <span class="black-text">
                          This is a image of <span style="color: chocolate">${state.user.name.first} ${state.user.name.last}</span>. 
                        </span>
                      </div>
                    </div>
                  </div>
                </div>                          `        
              container.innerHTML += user;
                return user;       
            };
  
       function initalView(){          
          container.innerHTML = ' <i class="medium material-icons" onclick="initalView()">adjust</i>';
       };
    
    
    
