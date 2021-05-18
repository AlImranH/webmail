$(document).ready(function () {
    var cc = 0;
   $(".add-field").click(function () {
       cc++;
       if (cc == 2) {
           $(this).change();
           cc = 0;
       }
   }).change(function () {
       var addField = $(this).children("option:selected").val();
       switch (addField) {
           case 'email':
               email();
               break;
           case 'phone':
               addPhone();
               break;
           case 'address':
               addAddress();
               break;
           case 'website':
               addWebsite();
               break;
           case 'im':
               addIm();
               break;
           default:
               return 0;
       }
       cc = -1;
   });

   $('.add-single-field').on('change', function () {
       var addField = $(this).children("option:selected").val();
       $(this).children("option:selected").attr('disabled', true);

       switch (addField) {
           case 'prefix':
               showOrHide('prefix');
               break;
           case 'middlename':
               showOrHide('middlename');
               break;
           case 'suffix':
               showOrHide('suffix');
               break;
           case 'display_name':
               showOrHide('display_name');
               break;
           case 'nickname':
               showOrHide('nickname');
               break;
           case 'organization':
               showOrHide('organization');
               break;
           case 'department':
               showOrHide('department');
               break;
           case 'jobtitle':
               showOrHide('jobtitle');
               break;
           case 'maidenname':
               addMaidenName();
               break;
           case 'anniversary':
               addAnniversary();
               break;
           case 'manager':
               addManager();
               break;
           case 'assistant':
               addAssistant();
               break;
           case 'spouse':
               addSpouse();
               break;
           default:
               return 0;
       }
});

   function email(){
       var subtypeEmail = $('#subtype_email').attr('name');
       var email = $('#email').attr('name');
       var emailRow = '<tr><td class="w-15 header-title"><select name="'+ subtypeEmail +'" id="" class="border-0 w-100"><option value="home">Home</option><option value="work">Work</option><option value="other">Other</option></select></td><td><input type="text" name="'+ email +'" class="px-2" autofocus><span class="p-1 cursor-pointer remove"><i class="fas fa-ban text-danger font-weight-bold"></i></td></tr>';
       $(emailRow).insertAfter('#emailRow');
    }
    function addPhone(){
        var subtypePhone = $('#subtype_phone').attr('name');
        var phone = $('#phone').attr('name');
       var row = '<tr><td class="w-15 header-title"><select name="'+ subtypePhone +'" id="" class="border-0 w-100"><option value="home">Home</option><option value="work">Work</option><option value="other">Other</option></select></td><td><input type="text" name="'+ phone +'" class="px-2" autofocus><span class="p-1 cursor-pointer remove"><i class="fas fa-ban text-danger font-weight-bold"></i></span></td></tr>';
       $(row).insertAfter('#phoneRow');
    }
    function addWebsite(){
       var row = '<tr><td class="w-15 header-title"><select name="subtype_website[]" class="border-0 w-100"><option value="homepage">Home Page</option><option value="work">Work</option><option value="blog">Blog</option><option value="profile">Profile</option><option value="other">Other</option></select></td><td><input type="text" name="website[]" class="px-2" autofocus><span class="p-1 cursor-pointer remove"><i class="fas fa-ban text-danger font-weight-bold"></i></span></td></tr>';
       // $('.properties').append(row);
       $(row).insertBefore('#addFieldRow');
    }
    function addIm(){
       var row = '<tr><td class="w-15 header-title"><select name="subtype_im[]" class="border-0 w-100"><option value="aim">Aim</option><option value="icq">Icq</option><option value="msn">Msn</option><option value="yahoo">Yahoo</option><option value="jabber">Jabber</option><option value="skype">Skype</option><option value="other">Other</option></select></td><td><input type="text" name="im[]" class="px-2" autofocus><span class="p-1 cursor-pointer remove"><i class="fas fa-ban text-danger font-weight-bold"></i></span></td></tr>';
       // $('.properties').append(row);
       $(row).insertBefore('#addFieldRow');
    }
    function addAddress(){
        var subtypeAddress = $('#subtype_address').attr('name');
        var street = $('#street').attr('name');
        var city = $('#city').attr('name');
        var zipCode = $('#zip_code').attr('name');
        var country = $('#country').attr('name');
        var state = $('#state').attr('name');
       var row = '<tr><td class="w-15 header-title"><select name="'+ subtypeAddress +'" id="" class="border-0 w-100"><option value="home">Home</option><option value="work">Work</option><option value="other">Other</option></select></td><td><input type="text" name="'+ street +'" class="px-2 my-1" placeholder="Street"><br><input type="text" name="'+ city +'" class="px-2 my-1" placeholder="City"><input type="text" name="'+zipCode+'" class="px-2 my-1 w-10" placeholder="ZIP Code"><br><input type="text" name="'+country+'" class="px-2 my-1" placeholder="Country"><input type="text" name="'+state+'"class="px-2 my-1 w-15" placeholder="State/Province"><span class="p-1 cursor-pointer remove"><i class="fas fa-ban text-danger font-weight-bold"></i></span></td></tr>';
       $(row).insertAfter('#addressRow');
    }

    function addMaidenName() {
       var row = '<tr><td class="header-title w-10"><label for="maidenname" class="m-0">Maiden Name</label></td><td><input type="text" name="maidenname" id="maidenname" placeholder="Maiden Name" class="mt-3"><span class="p-1 cursor-pointer remove"><i class="fas fa-ban text-danger font-weight-bold"></i></span></td></tr>';
       $(row).insertBefore('.addFieldRow');
    }

    function addAnniversary() {
       var row = '<tr><td class="header-title w-10"><label for="anniversary" class="m-0">Anniversary</label></td><td><input type="date" name="anniversary" id="anniversary" placeholder="Anniversary" class="mt-3"><span class="p-1 cursor-pointer remove"><i class="fas fa-ban text-danger font-weight-bold"></i></span></td></tr>';
       $(row).insertBefore('.addFieldRow');
    }

    function addManager() {
       var row = '<tr><td class="header-title w-10"><label for="manager" class="m-0">Manager</label></td><td><input type="text" name="manager" id="manager" placeholder="Manager" class="mt-3"><span class="p-1 cursor-pointer remove"><i class="fas fa-ban text-danger font-weight-bold"></i></span></td></tr>';
       $(row).insertBefore('.addFieldRow');
    }

    function addAssistant() {
       var row = '<tr><td class="header-title w-10"><label for="assistant" class="m-0">Assistant</label></td><td><input type="text" name="assistant" id="assistant" placeholder="Assistant" class="mt-3"><span class="p-1 cursor-pointer remove"><i class="fas fa-ban text-danger font-weight-bold"></i></span></td></tr>';
       $(row).insertBefore('.addFieldRow');
    }

    function addSpouse() {
       var row = '<tr><td class="header-title w-10"><label for="spouse" class="m-0">Spouse</label></td><td><input type="text" name="spouse" id="spouse" placeholder="Spouse" class="mt-3"><span class="p-1 cursor-pointer remove"><i class="fas fa-ban text-danger font-weight-bold"></i></span></td></tr>';
       $(row).insertBefore('.addFieldRow');
    }

    function showOrHide(id){
       $('#'+id).removeClass('d-none');
    }

    $(document).on('click', '.remove', function () {
        $(this).closest('tr').remove();
    })
});
