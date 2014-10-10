<h2><?php 

echo "Thought Of The Day preeteeee";
?></h2>
{foreach from=$aUsers item=aUser}
	<h1>{$aUser.title}</h1>

	<p>{$aUser.description}</p>
		<br>
{/foreach}