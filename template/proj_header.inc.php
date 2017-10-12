<nav class="mainnav project">
	<div>
		<a>Menu</a>
		<a href="..">Home</a>
		<a href="../#workSamples">Work Samples</a>
		<a href="../#experience">Experience</a>
		<a href="../#aboutMe">About Me</a>
		<a href="../#involveRec">Involvement &amp; Recognition</a>
		<a href="../assets/MariaSzubski_Resume.pdf" download>Resume (PDF)</a>
	</div>
</nav>
<header>
	<div class="label">
		<h1><?php echo $h1 ?></h1>
		<h2><?php echo $h2 ?></h2>
		<img src="<?php echo $himg[0] ?>" alt="<?php echo $himg[1] ?>" class="showcase"/>
	</div>
	<nav class="subnav">
		<ul>
			<li>
				<a href="<?php echo $prev ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="18" height="28" viewBox="0 0 18 28">
						<image width="18" height="28" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAcCAYAAABsxO8nAAAACXBIWXMAAAsSAAALEgHS3X78AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAelJREFUeNq0lelKw1AQhZNata0L7ruiuKBY9f3/+gZuKO4g7nuxtlRtPCNf5DYmraIGPmJic+45cycTPwgCr9Hh6wj/dG5/PBgg4DcSkkZKp2bRKtKI2UOvomxnaVTrCiGSFX1iUHQgWBV34kTcipdEIURyYkQsiBnRI3oR2hWrnIvpOjWxOP1iCTpxN0a0Cyeql0pIZffbxSQiIzz8JkpEMidXouKhmFSXITElBnDXhnhBrIlNcWP1sZ1L1YlkdZnGybMT7VLsiXNzZzsWF82NlMdNma02wVOxLo7FE0X3aqIlREoTqQ3BTbgKI7kOvhMpR6T9aKQaoQaR7DhLivQZDTcWoRuhUZHh/x2I7YituEhRRy107DjOAq6tf5rENa9CORopKvTrIxSqsOIJNfC5PqOb+3GYYXe/CpHX6nBPMU8pdIGdsgfnxWLY5c588qJ9VMXJMStbK3Q5v7NaLVPsR/GA09pouHqhqNvigHg5nD0zj2yUDFvjRiN+XrAbJcbDEatb5CJDLEOP5eMiRt/+ehF9eiw2Yo29b0QsEXE2GvHLPPoY5L7vRpyg2EWimtAKjsz9uX5fSSf0lxuxh3uddHmWN2BOHNJv8UIWUauEETdwEg5/n4UKzpzy/v9z9KcfyJ98st8FGACrQOttkPpSrgAAAABJRU5ErkJggg==" opacity="0.4"/><path d="M14.3 24.1L7.6 14l6.8-10.2c0.1-0.2 0.1-0.4 0-0.5C14.3 3.1 14.2 3 14 3h-3c-0.2 0-0.3 0.1-0.4 0.2l-7 10.5c-0.1 0.2-0.1 0.4 0 0.6l7 10.5C10.7 24.9 10.8 25 11 25h3c0 0 0 0 0 0 0.3 0 0.5-0.2 0.5-0.5C14.5 24.4 14.4 24.2 14.3 24.1zM11 24.5L4 14l7-10.5h3L7 14l7 10.5H11z"/><polygon points="14 24.5 11 24.5 4 14 11 3.5 14 3.5 7 14 " fill="#FFF"/>
					</svg>
					<span>Previous Project</span>
				</a>
			</li>
			<li>
				<a href="<?php echo $next ?>">
					<span>Next Project</span>
					<svg xmlns="http://www.w3.org/2000/svg" width="18" height="28" viewBox="0 0 18 28">
						<image width="18" height="28" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAcCAYAAABsxO8nAAAACXBIWXMAAAsSAAALEgHS3X78AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAhBJREFUeNqclW1PE0EUhdllS1osRlpFoSHBoEQj0e/+//hdxWh4iU0MhRZQU6UtbWU9lzxTZrezG8IkT7e7O3P2npk7d+I0TRcMtQhij5tnrk8ZyY1CFNkg+1/lagKmPhVXej9R5+uFkpaoU8TgptgUDaK5En9EV5yr27BMLOG6JNbFe7GD0IX4KQ7FV9GR2KBIzAm5qB4SlbNWEyu8myA2TpnUkNBY9MS+eCaeiH+IbdDHouuL37zLtBh1+9q52BMfGfBIPBAVsSae85Eai5MVsh98D8WJOGCCa1gdENm2eE20FRYpK0Qzsb+iLT6JYy8FRkS1K7ZEPTf29saz2MPiHgINLCZlFjOqOYuHWFy+i8U4kBJ5ix2el1qcE8pZ/CK+If6UyGwbtRBadbsjFJGzOCK7z8Qi+dTEXp3EbbIrgtbu1YJCRFrliy7LO0QYMYc/uB8HhVgFl81vxCv6dcn4ETlmi/HLFsHmNS6Iss5kvvX2mqtXLs/aRHY9FxGWapSUF6zUgEiWsXVEWbFFmLhKkBRY2oUqm3nKylk038WpJa5fm+ISSy2vThVaygjlLL3E0vAulmZCnqXH2HlHBlsBu/SyPGgpVLPXqNeu1C5ytfz5XGQpL+TqTp9EiymtfvEPWgrVbCsdH9ikc8dRkaWZkH1B0zQl3S9DBySRlB+QbrfbacrE+rU49UpLafsvwABKvxBVZ0eG+AAAAABJRU5ErkJggg==" opacity="0.4"/><path d="M3.7 3.9L10.4 14 3.6 24.2c-0.1 0.2-0.1 0.4 0 0.5C3.7 24.9 3.8 25 4 25h3c0.2 0 0.3-0.1 0.4-0.2l7-10.5c0.1-0.2 0.1-0.4 0-0.6l-7-10.5C7.3 3.1 7.2 3 7 3H4c0 0 0 0 0 0C3.7 3 3.5 3.2 3.5 3.5 3.5 3.6 3.6 3.8 3.7 3.9zM7 3.5L14 14 7 24.5H4L11 14 4 3.5H7z"/><polygon points="4 3.5 7 3.5 14 14 7 24.5 4 24.5 11 14" fill="#FFF"/>
					</svg>
				</a>
			</li>
		</ul>
	</nav>
</header>
