// Geolocation API 実装
//①要素の取得
const msg = document.getElementById("msg")
const chizu = document.getElementById("chizu")
const ido = document.getElementById("ido")
const keido = document.getElementById("keido")
const koudo = document.getElementById("koudo")

//②使用できるかのチェック
if(navigator.geolocation){
    msg.innerHTML="使用できます。";
}else{
    msg.innerHTML="使用できません。";
}
//③Android用オプション値
const option={enableHighAccuracy:true, timeout:10000, maximumAge:0};
//④取得関数起動
function getMap(){
    navigator.geolocation.getCurrentPosition(seiko, sippai, option);
}

//⑤成功したときの関数   置情報のデータ値はseiko()の第1引数に格納される。position
function seiko(position){
    // 緯度・経度・高度は、position内のcoords内に格納。
    //⑤-1. 値を取得
    let idoValue = position.coords.latitude;
    let keidoValue = position.coords.longitude;
    let koudoValue = position.coords.altitude;
    //⑤-2. 値を表示
    ido.innerHTML="緯度："+idoValue;
    keido.innerHTML="経度："+keidoValue;
    koudo.innerHTML="高度："+koudoValue;
    //⑤-3. 地図を描画
    const genzaichi = new google.maps.LatLng(idoValue, keidoValue);
    const gmap = new google.maps.Map(
        chizu,
        {zoom:12, center:genzaichi,
        mapTypeId:google.maps.MapTypeId.ROADMAP}
    );

    //④-4 マーカを表示
    const marker = new google.maps.Marker(
        {position:genzaichi,map:gmap}
    );
    const infoWindow = new google.maps.InfoWindow(
        {content:"現在地"}
    );

    infoWindow.open(gmap,marker);

}

//⑥. 失敗
// 失敗したデータは引数「err」に格納され、
// 「err」内のcodeにエラーコード、messageにエラーメッセージが入ります
function sippai(err){
    alert("失敗。error code:"+err.code+". Massage:"+err.message+".");
}