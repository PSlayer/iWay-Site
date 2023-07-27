<?php
session_start ();
include_once ("../../config.php");
include_once ("./ini.php");
$strings = $GLOBALS['strings'];
//if (!$_SESSION['auth']) exit;
?>
class SpeedTest {
	constructor(func = false) {
		this.counter = {};
		this.sw;
		this.div;
		this.control;
		this.interval;
		this.func = func;
		this.server = {list: <?=json_encode($setSpeedtest)?>};
	}
	graphMeter(block) {
		let div = this.div = document.createElement('div');
		div.classList.add('speedtest');
		div.innerHTML = `
			<div class="header">
				<div class="hide">
					<div>download</div>
					<div class="number dl">0</div>
					<div>Mbit/s</div>
				</div>
				<div class="ip hide"></div>
				<div class="hide">
					<div>upload</div>
					<div class="number ul">0</div>
					<div>Mbit/s</div>
				</div>
			</div>
			<svg viewBox="0 0 280 291.4" width="280" height="291.4">
			<style type="text/css">
				svg .st0{filter:url(#f1);}
				svg .st1{opacity:0.25;fill:none;stroke:url(#SVGID_1_);stroke-width:9.8;stroke-miterlimit:10;}
				svg .st2{fill:none;stroke:#223050;stroke-width:21.7778;stroke-miterlimit:3.1111;stroke-opacity:0.5;}
				svg .st3{fill:none;stroke:url(#arc_1_);stroke-width:23.3333;stroke-miterlimit:3.1111;}
				svg .st4{fill:#2A75B0;}
				svg .st5,.st11{font-family: 'Open Sans';}
				svg .st6{font-size:12px;font-weight: 600;}
				svg .st7{font-size:38px;}
				svg .st8{fill:url(#bigLine_1_);fill-opacity:0.9;}
				svg .st9{fill:none;stroke:#000000;stroke-width:3.8889;stroke-miterlimit:3.1111;}
				svg .st10{opacity:0.8;enable-background:new;}
				svg .st12{font-size:12.4444px;font-weight: 700;}
				svg .st13{font-size:68px;}
				svg .st14{font-size:16px;}
				svg .number {font-family:"Tulpen One";}
			</style>
				<filter  id="f1" x="-10%" y="0">
					<feGaussianBlur  in="SourceGraphic" stdDeviation="14"></feGaussianBlur>
				</filter>
				<g id="arc2" class="st0">					
					<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="-164.2639" y1="535.7382" x2="-163.2639" y2="535.7382" gradientTransform="matrix(224.1528 0 0 -191.3264 36848.2227 102551.6719)">
						<stop  offset="0" style="stop-color:#1668A9"/>
						<stop  offset="1" style="stop-color:#1668A9"/>
					</linearGradient>
					<path class="st1" d="M60.8,225.7c-43.8-43.8-43.8-114.7,0-158.5l0,0c43.8-43.8,114.7-43.8,158.5,0c43.8,43.8,43.8,114.7,0,158.5"/>
				</g>
				<path id="path" class="st2" d="M52,235.9C3.4,187.3,3.4,108.4,52,59.8l0,0c48.6-48.6,127.5-48.6,176.1,0s48.6,127.5,0,176.1"/>
				<linearGradient id="arc_1_" gradientUnits="userSpaceOnUse" x1="-164.3375" y1="535.8558" x2="-163.3375" y2="535.8558" gradientTransform="matrix(249.0587 0 0 -212.5849 40945.25 113956.4453)">
					<stop  offset="0" style="stop-color:#1668A9"/>
					<stop  offset="1" style="stop-color:#1668A9"/>
				</linearGradient>
				<path id="arc" class="st3" d="M52,235.9C3.4,187.3,3.4,108.4,52,59.8l0,0c48.6-48.6,127.5-48.6,176.1,0s48.6,127.5,0,176.1"/>
				<text transform="matrix(1 0 0 1 91.5498 112.1021)" text-anchor="middle" class="st4 st5 st6">ping, ms</text>
				<text transform="matrix(1 0 0 1 185.6243 112.1021)" text-anchor="middle" class="st4 st5 st6">jitter, ms</text>
				<text transform="matrix(1 0 0 1 185.6241 163.79)" text-anchor="middle" class="st4 st5 st6"></text>
				<text transform="matrix(1 0 0 1 91.55 163.79)" text-anchor="middle" class="st4 st5 st6"></text>
				<text transform="matrix(1 0 0 1 91.5498 147.778)" id="SpeedPing" text-anchor="middle" class="number st4 st5 st7"></text>
				<text transform="matrix(1 0 0 1 185.6242 147.778)" id="SpeedJitter" text-anchor="middle" class="number st4 st5 st7"></text>
				<linearGradient id="bigLine_1_" gradientUnits="userSpaceOnUse" x1="-163.1553" y1="524.4464" x2="-162.1553" y2="524.4464" gradientTransform="matrix(89.4444 0 0 -18.6667 14643.8887 9937.4443)">
					<stop  offset="9.999999e-02" style="stop-color:#0E1726"/>
					<stop  offset="1" style="stop-color:#F9FAFC"/>
				</linearGradient>
				<polygon id="SpeedArrow" class="st8" points="140,138.4 140,157.1 50.6,154 50.6,141.6 "/>
				<line class="st9" x1="47.1" y1="237.5" x2="53.8" y2="231"/>
				<line class="st9" x1="10.9" y1="147.8" x2="20.2" y2="147.8"/>
				<line class="st9" x1="48.7" y1="56.5" x2="55.3" y2="63.1"/>
				<line class="st9" x1="231.3" y1="56.5" x2="224.7" y2="63.1"/>
				<line class="st9" x1="269.1" y1="147.8" x2="259.8" y2="147.8"/>
				<line class="st9" x1="232.9" y1="237.5" x2="226.2" y2="231"/>
				<line class="st9" x1="140" y1="18.7" x2="140" y2="28"/>
				<text transform="matrix(1 0 0 1 66.1113 221.6665)" class="st10 st11 st12">0</text>
				<text transform="matrix(1 0 0 1 38.8887 153.2222)" class="st10 st11 st12">5</text>
				<text transform="matrix(1 0 0 1 63.7778 85.5557)" class="st10 st11 st12">10</text>
				<text transform="matrix(1 0 0 1 132.2222 54.4443)" class="st10 st11 st12">15</text>
				<text transform="matrix(1 0 0 1 198.3335 85.5557)" class="st10 st11 st12">20</text>
				<text transform="matrix(1 0 0 1 227.1113 153.2222)" class="st10 st11 st12">50</text>
				<text transform="matrix(1 0 0 1 198.3335 221.6665)" class="st10 st11 st12">100</text>
				<text transform="matrix(1 0 0 1 140.0937 254.1143)" id="SpeedNum" text-anchor="middle" class="number st4 st5 st13">0</text>
				<text transform="matrix(1 0 0 1 140.0939 287.9352)" text-anchor="middle" class="st4 st5 st14">Mbps</text>
			</svg>
			<div class="control">
				<div>
					<button class="runTest"><?= $strings[534] ?></button>
					<button class="abortTest"><?= $strings[535] ?></button>
				</div>
			</div>
			<div class="server">
				<select></select>
			</div>`;
		if (block) block.prepend(div); else document.body.prepend(div);
	}		
	async DataBus(param) {
		let data = param.split(';'),
			ip = document.querySelector(".speedtest .ip"),
			dl = document.querySelector(".speedtest .dl"),
			ul = document.querySelector(".speedtest .ul"),
			ResetCounter = () => {return {1: 0, 2: 0, 4: 0}},
			speedometer = ({speed = 0, time = .1}) => {//console.log(speed)
				let angle = 0;
				switch (true) {
					case speed <= 20:
						angle = speed/20*180; 
						break;
					case speed > 20 && speed <= 50:
						angle = 180 + (45/25*(speed - 25)); 
						break;
					case speed > 50 && speed <= 100:
						angle = 225 + (45/50*(speed - 50)); 
						break;
					case speed > 100:
						angle = 270 + Math.floor(Math.random() * (3 - 0) + 0); 
						break;
				}
				TweenLite.to("#SpeedArrow", time, {rotationZ: angle - 45,transformOrigin: "100% 50%", ease:Linear.easeNone});
			},				
			round = n => n >= 100 && n < 1000 ? n.toFixed(1) : n >= 1000 ? n.toFixed(0) : n;
			switch(+data[0]) {
				case 1:
					speedometer({speed: +data[1]});
					SpeedNum.textContent = /* dl.textContent = */ round(+data[1]) || 0;
					if (this.counter[1]++ == 20) {
							ip.classList.remove('hide');
							ip.textContent = 'IP: ' + data[4];
					}
					break;
				case 2:
					SpeedNum.textContent = 0;
					SpeedPing.textContent = data[3];
					SpeedJitter.textContent = data[5];
					if (this.counter[2]++ < 1) {
						speedometer({time:.8});
						dl.textContent = round(+data[1]) || 0;
						dl.parentElement.classList.remove('hide');
					}
					break;
				case 3:
					speedometer({speed: +data[2]});
					SpeedNum.textContent = round(+data[2]) || 0;
					break;
				case 4:
					speedometer({time:.8});
					SpeedNum.textContent = 0;
					ul.textContent = round(+data[2]) || 0;
					ul.parentElement.classList.remove('hide');
					/* if (this.counter[4]++ < 1) */ 
					const log = {name: this.server.list[this.server.active].name, id: this.server.list[this.server.active].id, log: data};
					await this.Send('./plugins/speedtest/api.php?speedtest', log);
					//if (this.server.active > 0 && this.server.list[this.server.active].log) 
						this.Send('https://speed.pubinfo.ru/api.php?sendlog', log);
					if (this.func) this.func();
				case 5:
					this.counter = ResetCounter();
					this.control.classList.remove('testing');
					break;
				case 6:	// reset
					speedometer({time:.8});
					let counter = {var: +SpeedNum.textContent};
					TweenMax.to(counter, .8, {var: 0, onUpdate: () => {SpeedNum.textContent = Math.ceil(counter.var)}, ease:SteppedEase.config(3)});
					SpeedPing.textContent = SpeedJitter.textContent = '';
					setTimeout(() => {dl.textContent = ul.textContent = 0}, 1000);
					(ip.classList.add('hide'), dl.parentElement.classList.add('hide'), ul.parentElement.classList.add('hide'), this.control.classList.remove('testing'));
					this.counter = ResetCounter();
			}							
	}
	async Initiate() {
		const control = this.control = document.querySelector(".speedtest .control"),
				style = document.createElement('style'),
				script = document.createElement('script');
			this.server.select = document.querySelector(".speedtest select");
		style.src = './plugins/speedtest/style.css';
		script.src = './plugins/speedtest/TweenMax.min.js';
		document.head.appendChild(style);
		document.head.appendChild(script);
		script.onload = () => {
			let sw = false, interval;
			TweenLite.to("#SpeedArrow", .8, {rotationZ: "-45",transformOrigin: "100% 50%", ease:Linear.easeNone});
			control.onclick = (e) => {
				if (e.target.classList.contains('runTest')) {
					this.DataBus('6');
					sw = this.sw = new Worker("./plugins/speedtest/speedtest_worker.min.js"),
					interval = setInterval(() => sw.postMessage("status"), 100);						
					//sw.postMessage("start");
					this.server.active = this.server.select.value || 0;
					if (this.server.list[this.server.active].ini) this.server.list[this.server.active].set.overheadCompensationFactor = this.server.list[0].set.overheadCompensationFactor;
					sw.postMessage("start " + JSON.stringify(this.server.list[this.server.active].set));
					console.log(this.server.list[this.server.active].set);
					sw.onmessage = (e) =>  {
						if (+e.data[0] >= 4) clearInterval(interval);
						this.DataBus(e.data);
					}
					control.classList.add('testing');
				}
				if (e.target.classList.contains('abortTest') && sw) {
					//clearInterval(interval);
					sw.postMessage("abort");
					this.DataBus('6');
					//sw = false;
				}
			}
		}
		
		<?php 
			if ($GLOBALS['UseExtermalSpeedTest']=='1'){
				echo ('this.server.list = await this.ReadList(this.server.list);');
			}
		?>
	
		this.server.list.forEach((v, k) => {
			if (v.display || v.id == 0) {
				var o = document.createElement("option");
				o.innerText = v.name;
				//o.value = v.id;
				o.value = k;
				this.server.select.appendChild(o);
			}
		})
	}
	async ReadList (list) {
		try {
			let response = await fetch('https://mikro-bill.com/getspeedtest.php?ssl=<?php echo ((isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] != "off") ? "1" : "0"); ?>');
			response = await response.json();
			if (response.list != undefined) list = list.concat(response.list);
		} catch (err) {};
		return list;
	}
	async Send (url, data) {
		let form = new FormData();
		form.append("json", JSON.stringify(data));
		await fetch(url, {method: 'POST', credentials: 'same-origin', body: form});
	}
}