	let message = '';
	const calc_growth = (invest, currentVal) => (currentVal - invest) / invest * 100;
	// console.log(calc_growth(100,200));
	const todayVal = document.querySelector('.investment__btn');
	todayVal.addEventListener('click', function () {
		const shekelToUsdBuy = document.querySelector('.price__input--bought').value;
		const shekelUsdToday = document.querySelector('.price__input-now').value;
		const Quantity = document.querySelector('.investment__btc').value;
		const profit = shekelToUsdBuy - shekelUsdToday;
		const result = document.querySelector('.result');
			if (profit > 0) {
				message = `profit of ${profit*Quantity} NIS  (${calc_growth(shekelUsdToday,shekelToUsdBuy).toFixed(2)}% growth)`;
				result.style.color = 'green';
			} else if (profit < 0) {
				message = `you lose ${profit*Quantity*(-1)} NIS  growth is negative (${calc_growth(shekelUsdToday,shekelToUsdBuy).toFixed(2)}%)`;
				result.style.color = 'red';
			} else {
				message = 'you are even';
				//result.style.color = 'yellow';
			}
			if (! shekelToUsdBuy || !shekelUsdToday) {
				result.innerHTML = "Can't calculate";
				result.style.fontSize = 'x-large';
				result.style.color = 'initial';
			}else if(!Quantity){
				result.style.color = 'initial';
				let newMessage;
				newMessage = message ===  'you are even' ? message : ` ${message.slice(15)}`;
				console.log(message,newMessage);
				result.innerHTML = newMessage;
			}else{
		result.innerHTML = message;
			}
	});