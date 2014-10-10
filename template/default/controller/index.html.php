<h2><?php 

echo "Thought Of The Day preeteeee";
/* code added by puja*/
echo "hello";
?></h2>
{foreach from=$aUsers item=aUser}
	<h1>{$aUser.title}</h1>

	<p>{$aUser.description}</p>
		<br>
{/foreach}