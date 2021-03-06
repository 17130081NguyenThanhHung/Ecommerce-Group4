/*# @*****************************************************************************@
# @	Group 4 Thương mại điện tử Cô Châu											@
# @ @github group4: https://github.com/17130081NguyenThanhHung/Ecommerce-Group4 @
# @ @author1_url: https://www.facebook.com/TheSaltOfTheEarthTheLightOfTheWorld/	@
# @ @author1_email: 17130081@st.hcmuaf.edu.vn                            		@
# @*****************************************************************************@*/


SELECT 
	prod.`id`,
	prod.`poster`, 
	prod.`name`,
	prod.`reg_price`,
	prod.`sale_price`,
	prod.`rating`,
	prod.`sold` as sales

	FROM `{%t_prods%}` prod
	
	WHERE prod.`activity_status` = 'active'

	AND prod.`status` = 'active'

	AND prod.`editing_stage` = 'saved'

	AND prod.`approved` = 'Y'

	{%if offset%}		
		AND prod.`id` < {%offset%}
	{%endif%}

	ORDER BY prod.`id` DESC, prod.`sold` DESC

{%if limit%}	
	LIMIT {%limit%}
{%endif%}