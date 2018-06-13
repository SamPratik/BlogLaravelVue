window.axios = require('axios');

    // $(document).ready(function() {
      var loginRegCom = new Vue({
        el: '#loginRegCom',
        data: () => ({
          usernames: [],
          unExist: false,
          username: '',
          unErr: ''
        }),
        mounted() {
          //getting all the existing usernames in database...

          axios.get(urlUsernames).then(res => {
              console.log(res.data);
              for (let i = 0; i < res.data.length; i++) {
                this.usernames.push(res.data[i].username);
              }
              console.log(this.usernames);
          })
        },
        watch: {
          username() {
            console.log(this.username);
            this.unExist = false;
            console.log(this.usernames.length);
            if (this.usernames.length > 0) {
              for (let i = 0; i < this.usernames.length; i++) {
                if (this.usernames[i] == this.username) {
                  this.unExist = true;
                  return;
                }
              }
            }
          }
        },
        methods: {
          regUser() {
            let fd = new FormData(document.getElementById('regForm'));
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
              url: urlReg,
              type: 'POST',
              data: fd,
              contentType: false,
              processData: false,
              success: (data) => {
                console.log(data);
                var emReg = document.getElementsByClassName("emReg");
                // after returning from the controller we are clearing the
                // previous error messages...
                for(i=0; i<emReg.length; i++) {
                  emReg[i].innerHTML = '';
                }
                this.unExist = false;
                // if review is stored in database successfully, then show the
                // success toast...
                if(data === "success") {

                }
                // Showing error messages in the HTML...
                if(typeof data.error != 'undefined') {
                  if(typeof data.username != 'undefined') {
                    emReg[0].innerHTML = data.username[0];
                  }
                  if(typeof data.firstname != 'undefined') {
                    emReg[1].innerHTML = data.firstname[0];
                  }
                  if(typeof data.lastname != 'undefined') {
                    emReg[2].innerHTML = data.lastname[0];
                  }
                  if(typeof data.email != 'undefined') {
                    emReg[3].innerHTML = data.email[0];
                  }
                  if(typeof data.phone != 'undefined') {
                    emReg[4].innerHTML = data.phone[0];
                  }
                  if(typeof data.password != 'undefined') {
                    emReg[5].innerHTML = data.password[0];
                  }
                }
              }
            });
          }
        }
      })
    // });
