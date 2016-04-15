var API = {
  GetRole : function(callback){
    jQuery.get('api.php?action=getRole',function(data){
      callback.call(null, data);
    });
  }
};

(function(){
  
  API.GetRole(function(roles){
    console.log(roles);
    
    var isDr = (roles[0] == 'Adminsitraor') ? true : false;
    
  });
  
})();