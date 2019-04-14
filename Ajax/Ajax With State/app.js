const USER_API_URL = 'https://randomuser.me/api';
        const state = {
            users: [],
        };

        function getUser() {
            $.get({
                url: USER_API_URL,
                success: (response) => {
                    console.log(response)
                    const user = response.results[0];
                    state.users.push(user);
                    const $user = createUserElement(user);
                    console.log(user);
                    console.log('state:' , state.users)
                }
            });

            function createUserElement(user) {
                 $user = `                  
                     
                     
                       <li class='group-list-item'>
                            <img src="${user.picture.large}"/>                           
                                <p>${user.name.first} ${user.name.last}</p>
                                <p>${user.email}</p>                                                              
                        </li>
                                               
                    `
                $('.group-list').append($user);
            }
        }
        function hideUsers() {
            $('.group-list').hide();
            state.users = [];
        }
        function showState(){
            $('.stateContainer')[0].style.opacity = 1;
            const curentUsers = state.users;
            let maleNum = 0;
            let femaleNum = 0;
            curentUsers.forEach((user,i) =>{               
                curentUsers[i].gender === "male" ? maleNum++ : femaleNum++ 
            })
            const stateContainer = $('.stateContainer');
            stateContainer.html(`
            <p><u>Users Number:</u> ${state.users.length}</p>
            <span>Male: ${maleNum}</span>
            <p>Female: ${femaleNum}</p>          
            `);         
        }
        function hideState(e){
            if(e.target.className !== 'btn btn-info'){
                  $('.stateContainer')[0].style.opacity = 0 
            }
        }
       

        getUser();
