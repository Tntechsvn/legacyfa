<?php

return [
	'PAGINATE_USER' => 10,
	'PAGINATE_USER_TRASH' => 10,
	'PAGINATE_COMPANY' => 10,
	'PAGINATE_COMPANY_TRASH' => 10,
	'PAGINATE_CATEGORY_PLAN' => 10,
	'PAGINATE_CATEGORY_PLAN_TRASH' => 10,
	'PAGINATE_PLAN' => 10,
	'PAGINATE_PLAN_TRASH' => 10,
	'PAGINATE_RIDER' => 10,
	'PAGINATE_RIDER_TRASH' => 10,
	'PAGINATE_PFR' => 10,
	'PAGINATE_PFR_TRASH' => 10,

	'PAGINATE_DEPENDANT_SINGLE' => 10,
	'PAGINATE_DEPENDANT_SINGLE_TRASH' => 10,

	'Risk_Profile_Questionnaire' => [
		[
			'name' => 'What is your investment time horizon?',
			'answers' => [
				'a' => 'Less than 1 year',
				'b' => '1 to 3 years',
				'c' => '4 to 6 years',
				'd' => '7 to 9 years',
				'e' => 'More than 10 years'
			]
		],
		[
			'name' => 'What is your age group?',
			'answers' => [
				'a' => '65 and above',
				'b' => '55 to 64',
				'c' => '35 to 54',
				'd' => '35 and below'
			]
		],
		[
			'name' => 'If you were to contemplate an investment today, what percentage would that amount be in relation to your total savings and investments? (Total savings and investments include all assets you have in cash, bonds, unit trusts, stocks)',
			'answers' => [
				'a' => 'Less than 25%',
				'b' => '25% to 50%',
				'c' => '51 to 75%',
				'd' => 'More than 75%'
			]
		],
		[
			'name' => 'Which statement best describes your investment knowledge / experience?',
			'answers' => [
				'a' => 'I have very little investment knowledge / experience about investments and financial markets.',
				'b' => 'I have a moderate level of investment knowledge / experience about investments and financial markets.',
				'c' => 'I have extensive investment knowledge / experience about investments and financial markets.'
			]
		],
		[
			'name' => 'Is there a coming financial need which may require you to liquidate the investment being contemplated? If so, what timeframe?',
			'answers' => [
				'a' => 'No',
				'b' => 'Yes, more than 8 years',
				'c' => 'Yes, between 5 to 8 years',
				'd' => 'Yes, within 2 to 4 years',
				'e' => 'Yes, between 12 months'
			]
		],
		[
			'name' => 'The value of investment may fluctuate over time. What percentage of decline in your investment portfolio are you able to accept in a 12-month period?',
			'answers' => [
				'a' => 'I will not be able to accept any losses.',
				'b' => '3% to 5%',
				'c' => '6% to 9%',
				'd' => '10% to 20%',
				'e' => 'More than 20%'
			]
		],
		[
			'name' => 'If the markets you are invested in face a sudden decline in value, what would be your most likely response?',
			'answers' => [
				'a' => 'Sell all the remaining investments to avoid further losses.',
				'b' => 'Sell a portion of the investments to protect some capital and hold on to the rest.',
				'c' => 'Hold on to the investments in the hope that the markets will recover.',
				'd' => 'Buy more of the investments now that prices are lower.'
			]
		],
		[
			'name' => 'If you were to consider making an investment, what would your objective be?',
			'answers' => [
				'a' => 'Keep my hard earned money safe from potential downside risk and liquid so that I can draw upon it for shortterm needs.',
				'b' => 'I want the investment to yield a steady stream of income to supplement my earning capacity. Growth is of a lesser priority than generating the income stream.',
				'c' => 'I want the investment to generate a steady stream of income as well as capital growth. Both income and growth are equally important to me.',
				'd' => 'I want to focus on growth of my investments. Generating an income stream is not an important consideration of the investments.',
				'e' => 'I want to generate significant long-term growth for my investments. I understand that it will necessitate a higher proportion of the investment in equities.'
			]
		],
		[
			'name' => 'Different asset classes have different risk/return relationships. Which asset classes would you be most comfortable with?',
			'answers' => [
				'a' => 'Saving accounts, fixed deposits, money market instruments',
				'b' => 'Bonds',
				'c' => 'Portfolio of Bonds + Equities OR Portfolio of Bond + Equity Mutual Funds',
				'd' => 'Equities',
				'e' => 'Options, futures, warrants'
			]
		],
	]
];
