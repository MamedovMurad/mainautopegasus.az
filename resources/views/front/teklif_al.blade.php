@extends('front.Layout.master')
@section('content')





<section class="Post-teklif-al">

<div class="container">
    <div class="row">
  <div class="col-lg-12">
    <form action="" id="form" class="form-control ">

      <div class="row">
      <div class="div-select col-lg-4 mt-4">
        <select class="form-select "  id="getMark" >

        <option value="" >Marka</option>
        </select>
      </div>
      <div class="div-select col-lg-4 mt-4">
        <select class="form-select "  id="get-models" >

        <option value="" >Model</option>
        </select>
      </div>
      <div class="div-select col-lg-4 mt-4">
        <select class="form-select "  id="get-years" >

        <option value="" >Buraxılış ili</option>
        </select>
      </div>
      <div class="div-select col-lg-4 mt-4">
        <select class="form-select "  id="get-engines" >

        <option value="" >MÜhərrik</option>
        </select>
      </div>
      </div>


        </form>
  </div>
</div>
</div>

</section>


@section('script')




<script>
    let getMark = document.querySelector("#getMark");
    let getModels = document.querySelector("#get-models");
    let getYears = document.querySelector("#get-years");
    let getEngines = document.querySelector("#get-engines");
    var taq = document.querySelector(".tag");
//console.log(document.querySelector(".tag"));

let url = "http://172.16.10.220:8000/api/";


$.ajax({
                    type: "Get",
            url: url+"marka",

            success: function(data){

            for (let i = 0; i < data.length; i++) {
            let option = document.createElement('option');
            var tag = document.createAttribute('value');
            var tag_class= document.createAttribute('class');
            tag_class.value="tag";
            tag.value=data[i].id;

            option.innerText=data[i].marka;
            option.setAttributeNode(tag);
            option.setAttributeNode(tag_class);
            getMark.append(option)
            //console.log(option) ;



            }
        }
});




/*     $.ajax({
     type: "Get",
     url: "http://172.16.10.220:8000/api/car/marka/"+id+"/models",

     success: function(data){

         console.log(data);

     }
}); */





//console.log(option1);




</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script type="text/javascript">





getMark.addEventListener('change', function(){

    let id2 = parseInt(getMark.value);


    let url2 = "http://172.16.10.220:8000/api/car/marka/"+id2+"/model";
    $.ajax({
        type: "Get",
        url:url2+"s",


    success:function(model){
        $('#get-models').empty();
        for (let i = 0; i < model.models.length; i++) {
           // console.log(model.models[i]);
           let option1 = document.createElement('option');
            var tag1 = document.createAttribute('value');
            var tag1_class= document.createAttribute('class');
            tag1_class.value="years";
            tag1.value=model.models[i].id;

            option1.innerText=model.models[i].name;
            option1.setAttributeNode(tag1);
            option1.setAttributeNode(tag1_class);
            getModels.append(option1)





            }

}
})

/* get years  */
getModels.addEventListener('change',function(){
    let id3 = parseInt(getModels.value);
    //console.log(id3);
 $.ajax({
url: url2+"/"+id3+"/years",
type: 'GET',
success: function(res) {
    $('#get-years').empty();
    res.years.forEach(year => {
        let option1 = document.createElement('option');
            var tag1 = document.createAttribute('value');
            var tag1_class= document.createAttribute('class');
            tag1_class.value="models";
            tag1.value=year;

            option1.innerText=year;
            option1.setAttributeNode(tag1);
            option1.setAttributeNode(tag1_class);
            getYears.append(option1)

       // console.log(year);
    });
}
});

/* get engines */
getYears.addEventListener('change',function(){
    let id4=parseInt(getYears.value);
  //  console.log(id4);
    $('#get-engines').empty();
   $.ajax({
                type: "get",
                url: url2+"/"+id3+"/year/"+id4+"/engines",

                success: function(data){
                    data.engines.forEach(engin => {
                        let option1 = document.createElement('option');
            var tag1 = document.createAttribute('value');
            var tag1_class= document.createAttribute('class');
            tag1_class.value="engines";
            tag1.value=engin;

            option1.innerText=engin;
            option1.setAttributeNode(tag1);
            option1.setAttributeNode(tag1_class);
            getEngines.append(option1)
                    });
                }
            });

})

})

})



</script>



<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
@endsection
@endsection
