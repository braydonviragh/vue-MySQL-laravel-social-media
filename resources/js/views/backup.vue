<template>
<div>
<head>
    <link rel="stylesheet" href="../css/app.css">
</head>
  <div class="main_container">

    <div class="container profile col-md-9 d-flex align-items-center justify-content-center bg-white p-4 my-4">
        
        <div class="left_container col-md-3 pl-3 mx-3">
            <div class="profile_picture">
                <img v-bind:src='users.profile_picture'>
            </div>
        </div>

            <div class="center_container col-md-7 pt-3"> 
                <div>
                    <h1>{{users.name}}</h1>
                    <h6 class=" font-weight-bold text-secondary">Bio</h6>
                    <p class="text-secondary">{{users.bio}}</p>
                </div>
            </div>
       
        <div class="right_container col-md-3">
            <div>
                <h6 class="font-weight-bold text-secondary">Phone</h6>
                <p>{{users.phone}}</p>
            </div>
            <div>
                <h6 class="font-weight-bold text-secondary">Email</h6>
                <p>{{users.email}}</p>
            </div>
        </div>
    </div>

    <div class="container album ">
        <div class="albumRow row d-flex justify-content-center" id="albums">
            
      

            <div class="picture col-md-3 bg-white">
                <div class="picture_background">
                    <img v-bind:src='users.pictures[0].img'/>
                    <div class="picture_title">
                        <h2 class="h4">{{users.pictures[0].title}}</h2>
                    </div>
                </div>
                    <div class="picture_info">
                        <p>{{users.pictures[0].description}}</p>
                        <div class="picture_bottom d-flex justify-content-between">
                            <p>{{users.pictures[0].featured}}</p>
                            <p class="text-secondary">{{users.pictures[0].date}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  
</template>
<script>
const default_layout = "default";






export default {
    data() { 
        return {
            users: []
        }
    },
    mounted() { 
        fetch('http://127.0.0.1:8000/api/getUsers')
        .then(res => res.json())
        .then(data => this.users = data)
        .catch(err => console.log(err.message))
    }

};

</script>