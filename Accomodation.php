<?php
  $title = "Accomodation | ICHSA 2018";
  $id_name = 'id="accomodation-page"';
  include 'include/php/head.php';
?>

  <div>
    <main>
      <div class="container">
        <div class="section">
          <h2 class="accomodation-title">Accomodation</h2>
        </div>
        <div class="divider"></div>
        <p class="accomodation-content">
          Note:<br> 1. An optional limited shared accommodation shall be provided to the Indian participants on payment basis, the participants are 
          required to pay a fixed amount of Rs. 1000/- (for all days) in addition to registration fee. <br>
          2. The accompany person will also be required to pay the accommodation fee in addition to the registration fee.
        </p>
        <br>
        <h6>For more information:<a href=""> Click Here</a></h6>
        <!-- <div class="svg-animation">
          <svg width="200" height="200">

      <filter id="innerShadow" x="-20%" y="-20%" width="140%" height="140%">
          <feGaussianBlur in="SourceGraphic" stdDeviation="3" result="blur"/>
          <feOffset in="blur" dx="2.5" dy="2.5"/>
      </filter>

      <g>
          <circle id="shadow" style="fill:rgba(0,0,0,0.1)" cx="97" cy="100" r="87" filter="url(#innerShadow)"></circle>
          <circle id="circle" style="stroke: #FFF; stroke-width: 1px; fill:#009688" cx="100" cy="100" r="80"></circle>
      </g>
      <g>
          <line x1="100" y1="100" x2="100" y2="55" transform="rotate(80 100 100)" style="stroke-width: 3px; stroke: #fffbf9;" id="hourhand">
              <animatetransform attributeName="transform"
                                attributeType="XML"
                                type="rotate"
                                dur="43200s"
                                repeatCount="indefinite"/>
          </line>
          <line x1="100" y1="100" x2="100" y2="40" style="stroke-width: 4px; stroke: #fdfdfd;" id="minutehand">
              <animatetransform attributeName="transform"
                                attributeType="XML"
                                type="rotate"
                                dur="3600s"
                                repeatCount="indefinite"/>
          </line>
          <line x1="100" y1="100" x2="100" y2="30" style="stroke-width: 2px; stroke: #C1EFED;" id="secondhand">
              <animatetransform attributeName="transform"
                                attributeType="XML"
                                type="rotate"
                                dur="60s"
                                repeatCount="indefinite"/>
          </line>
      </g>
      <circle id="center" style="fill:#009688; stroke: #C1EFED; stroke-width: 2px;" cx="100" cy="100" r="3"></circle>
  </svg>
        </div> -->
      </div>
    </main>
  </div>
  <script type="text/javascript">
  var hands = [];
  hands.push(document.querySelector('#secondhand > *'));
  hands.push(document.querySelector('#minutehand > *'));
  hands.push(document.querySelector('#hourhand > *'));

  var cx = 100;
  var cy = 100;

  function shifter(val) {
    return [val, cx, cy].join(' ');
  }

  var date = new Date();
  var hoursAngle = 360 * date.getHours() / 12 + date.getMinutes() / 2;
  var minuteAngle = 360 * date.getMinutes() / 60;
  var secAngle = 360 * date.getSeconds() / 60;

  hands[0].setAttribute('from', shifter(secAngle));
  hands[0].setAttribute('to', shifter(secAngle + 360));
  hands[1].setAttribute('from', shifter(minuteAngle));
  hands[1].setAttribute('to', shifter(minuteAngle + 360));
  hands[2].setAttribute('from', shifter(hoursAngle));
  hands[2].setAttribute('to', shifter(hoursAngle + 360));

  for (var i = 1; i <= 12; i++) {
    var el = document.createElementNS('http://www.w3.org/2000/svg', 'line');
    el.setAttribute('x1', '100');
    el.setAttribute('y1', '30');
    el.setAttribute('x2', '100');
    el.setAttribute('y2', '40');
    el.setAttribute('transform', 'rotate(' + (i * 360 / 12) + ' 100 100)');
    el.setAttribute('style', 'stroke: #ffffff;');
    document.querySelector('svg').appendChild(el);
  }
  </script>

  <?php
   include 'include/php/foot.php';
  ?>
