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

	'STEP_RATE_INCOME' => 1,
	'STEP_RATE_FUND_DISABILITY' => 2,
	'STEP_RATE_FUND_CRITICAL' => 3,
	'STEP_RATE_FUND_CHILDREN' => 4,
	'STEP_RATE_FUND_SAVING' => 5,
	'STEP_RATE_FUND_RETIREMENT' => 6,
	'STEP_RATE_COVER' => 7,
	'STEP_RATE_FUND_CARE' => 8,
	'STEP_RATE_FUND_HOSPITAL' => 9,

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
	],

	'CKA_Questionnaire' => [
		[
			'name' => 'Do you have a Diploma or higher qualification(s) in any of the following?',
			'answers' => [
				'a' => 'Accountancy',
				'b' => 'Economics',
				'c' => 'Actuarial Science', 
				'd' => 'Finance',
				'e' => 'Capital Markets',
				'f' => 'Financial Engineering',
				'g' => 'Commerce',
				'h' => 'Financial Planning',
				'i' => 'Computational Finance',
				'j' => 'Insurance',
				'k' => 'Business / Business Administration / Business Management / Business Studies'
			]
		],

		[
			'name' => 'Do you have a professional finance-related qualification(s) in any of the following?',
			'answers' => [
				'a' => 'Chartered Financial Analyst (CFA)',
				'b' => 'Chartered Financial Consultant (ChFC)',
				'c' => 'Association of Chartered Certified Accountants (ACCA)', 
				'd' => 'Associate Financial Planner (AFP)',
				'e' => 'Chartered Institute of Securities & Investment',
				'f' => 'Associate Wealth Planner',
				'g' => 'Chartered Alternative Investment Analyst (CAIA)',
				'h' => 'Certified Financial Planner (CFP)',
				'i' => 'Certified Financial Technician (CFTe)',
				'j' => 'CMFAS Exams (M8 & M8A, or M9 & M9A, or M6 & M7)',
				'k' => 'Financial Risk Manager (FRM)'
			]
		],

		[
			'name' => 'Have you transacted at least 6 times in a Collective Investment Scheme (eg. Unit Trust) or Investment Linked Policy (ILP) in the last 3 years?',
			'answers' => [
				'a' => 'Unit Trust',
				'b' => 'Investment-linked Policy'
			]
		],

		[
			'name' => 'Do you have at least 3 consecutive years of working experience for the last 10 years in any of the following?',
			'answers' => [
				'a' => 'Accountancy',
				'b' => 'Actuarial Science',
				'c' => 'Treasury',
				'd' => 'Financial Risk Management',
				'e' => 'Provision of legal advice in relevant financial areas',
				'f' => 'Development / Structuring / Management / Training / Sale / Trading /Research on and Analysis of Investment'
			]
		],
	],

	'Clients_Acknowledgement' => [
		[
			'name' => 'Customer Knowledge Assessment Outcome',
			'answers' => [
				'a' => 'I/we acknowledge that I/we have been assessed to the Customer Knowledge Assessment and I/we confirm that I/we to receive advice concerning the unlisted Specified Investment Product from my/our Legacy FA Representative.',
				'b' => 'I/we acknowledge that I/we have been assessed to the Customer Knowledge Assessment and I/we confirm that I/we to receive advice concerning the unlisted Specified Investment Product from my/our Legacy FA Representative. In this regard, I/we am/are aware that I/we will not be able to rely on Section 27 of the Financial Advisers Act (Cap 110) to file a civil claim against Legacy FA Pte Ltd in the event of a loss. It is my/our responsibility to ensure the suitability of the unlisted Specified Investment Product selected.',
				'c' => 'I/we acknowledge that I/we have been assessed to the Customer Knowledge Assessment and I/we understand that I/we will need to receive advice concerning the unlisted Specified Investment Product from my/our Legacy FA Representative and accept his/her recommendation(s) to proceed with the purchase of the investment product(s)'
			]
		],

		[
			'name' => 'Replacement / Switching of Existing Insurance Policy/Investment Product',
			'answers' => [
				'a' => 'I/we am/are fully aware that I/we may incur fees and charges as a result of (a) the disposal of, or reduction in interest in, an existing insurance policy/investment product; and (b) the acquisition of, or increase in interest in, a new insurance policy/investment product. I/we confirm that I/we wish to proceed with the replacement / switch notwithstanding the fees, charges or disadvantages that may arise could outweigh any potential benefits.I/we will obtain my/our own advice on the tax implications and/or any ancillary implications in relation to the application of the new insurance policy/investment product'
			]
		],

		[
			'name' => 'Procedures, Charges and Restrictions on Withdrawal / Surrender / Claim',
			'answers' => [
				'a' => 'I/we acknowledge that my/our Legacy FA Representative has disclosed and explained the procedures, charges, and restrictions on withdrawal, surrender / termination or claim of the product(s) recommended'
			]
		],

		[
			'name' => 'Documents to Receive',
			'answers' => [
				'a' => 'Where and are concerned, I/we acknowledge that my/our Legacy FA Representative has informed me/us of the frequency of the reports/statements and source from which I/we could reasonably expect to receive for the product(s) I/we have chosen to purchase.',
				'b' => 'I/we acknowledge that my Legacy FA Representative has explained the contents within this document and has furnished me/us with the endorsed copy of this document as well as the following documents (where applicable):',
				'c' => [
					'c1' => 'Insurance Application Form(s)',
					'c2' => 'Legacy FA Model Portfolio Fact Sheet(s)',
					'c3' => 'Benefit Illustration(s)',
					'c4' => 'Fund Fact Sheet(s)',
					'c5' => 'Product Summary(ies)',
					'c6' => 'Product Highlight Sheet(s)',
					'c7' => 'Your Guide to Life Insurance',
					'c8' => 'Prospectus(es)',
					'c9' => 'Your Guide to Health Insurance',
					'c10' => 'Navigator Schedule - Funds Investment',
					'c11' => 'Your Guide to Investment-Linked Insurance Plans',
					'c12' => 'Navigator Account Opening/Subscription Form',
					'c13' => 'Fund Summary(ies)',
					'c14' => 'Havenport Investment Account Opening Form'
				],
			],
		],
		[
			'name' => 'Personal Data Collection & Marketing Consent',
			'answers' => [
				'a' => 'I/we hereby give my/our consent to Legacy FA Pte Ltd to collect, use, and/or disclose my/our personal data for the purpose of performing financial needs analysis and planning, including providing financial advice, product recommendation and reviews of my/our financial plans',
				'b' => 'I/we hereby give my/our consent to Legacy FA Pte Ltd to contact me/us regarding any marketing and promotional materials on financial products and services.'
			]
		],
		[
			'name' => 'Personal Data Collection & Marketing Consent',
			'answers' => [
				'a' => 'I/we hereby give my/our consent to Legacy FA Pte Ltd to collect, use, and/or disclose my/our personal data for the purpose of performing financial needs analysis and planning, including providing financial advice, product recommendation and reviews of my/our financial plans',
				'b' => 'I/we hereby give my/our consent to Legacy FA Pte Ltd to contact me/us regarding any marketing and promotional materials on financial products and services.'
			]
		],
	],
	'Representatives_Declaration' => [
		[
			'name' => 'Representative\'s Declaration',
			'answers' => [
				'a' => '1.Where applicable,I have explained to the client the possible disadvantages of product switching / replacement and informed him/her of other options available besides product switching / replacement',
				'b' => '2.Where applicable, I have also explained the basis for product switching / replacement and why the product switch / replacement is suitable for the client below:',
				'c' => '3.The recommendation(s) made by me is/are based on the above needs analysis which has taken into account the information disclosed by the client in this \'Personal Financial Record\'.',
				'd' => '4.The information provided to me in this \'Personal Financial Record\' is strictly confidential and is only to be used for the purpose of fact-finding as part of the process of recommending suitable insurance/investment product(s) and shall not be used for any other purposes.'
			]
		],
	],
	'Supervisory_Checklist' => [
		[
			'name' => 'Supervisory Checklist for \'Personal Financial Record\'',
			'answers' => [
				'a' => 'All information required in this \'Personal Financial Record\' were fully obtained and documented.',
				'b' => 'The client\'s objective(s) to be addressed, including the shortfall amount ($), is/are clearly established. Satisfactory Unsatisfactory Remar',
				'c' => 'The premium/investment amount proposed to meet the client\'s objective(s) is within the client\'s budget',
				'd' => 'Reasons for recommendation(s) / deviation / switching / replacement are appropriate and were clearly explained.',
				'e' => 'The product features, benefits, limitations and risks of the plan(s) recommended were highlighted correctly.'
			]
		],
	],
	'response_questions' => [
		[
			'name' => 'Please indicate the client\'s response during the call-back on ALL of the following questions:',
			'answers' => [
				'a' => 'Is the client proficient in spoken English?',
				'b' => 'Would the client be required to have a Trusted Individual?',
				'c' => 'Did the FA Representative ask about the client\'s financial situation, investment objective and risk appetite before product recommendation?',
				'd' => 'Did the FA Representative explain about the suitability of the product(s)?',
				'e' => 'Did the FA Representative explain on risks and limitations of the product(s)?',
				'f' => 'Did the FA Representative mention the premium amount of the product(s)?'
				]
		]
	],
];
