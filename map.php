<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>헬로키친 지도</title>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script>
		function initialize() {

			/*
				http://openapi.map.naver.com/api/geocode.php?key=f32441ebcd3cc9de474f8081df1e54e3&encoding=euc-kr&coord=LatLng&query=서울특별시 강남구 강남대로 456
                위의 링크에서 뒤에 주소를 적으면 x,y 값을 구할수 있습니다.
			*/
			var Y_point			= 37.292114;		// Y 좌표
			var X_point			= 127.012439;		// X 좌표

			var zoomLevel		= 16;						// 지도의 확대 레벨 : 숫자가 클수록 확대정도가 큼

			var markerTitle		= "헬로키친";				// 현재 위치 마커에 마우스를 오버을때 나타나는 정보
			var markerMaxWidth	= 300;						// 마커를 클릭했을때 나타나는 말풍선의 최대 크기

			// 말풍선 내용
			var contentString	= '<div>' +
			'<h2>헬로키친</h2>'+
			'<p> 1995년 헬로키친은 해외에 로열티를 내지 않는 독자적인 패밀리 레스토랑 사업을 시작으로<br>' +
            '출발하여 성공적으로 전문외식업체로서의 기반을 다졌습니다.</p>' +
			//'<a href="http://www.daegu.go.kr" target="_blank">http://www.daegu.go.kr</a>'+ //링크도 넣을 수 있음
			'</div>';

			var myLatlng = new google.maps.LatLng(Y_point, X_point);
			var mapOptions = {
								zoom: zoomLevel,
								center: myLatlng,
								mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			var map = new google.maps.Map(document.getElementById('map_view'), mapOptions);

			var marker = new google.maps.Marker({
													position: myLatlng,
													map: map,
													title: markerTitle
			});

			var infowindow = new google.maps.InfoWindow(
														{
															content: contentString,
															maxWidth: markerMaxWidth
														}
			);

			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map, marker);
			});
		}
	</script>
</head>

<body onload="initialize()">

 
<div id="map_view" style="width:100%; height:35vh;"></div>
</body>
</html>