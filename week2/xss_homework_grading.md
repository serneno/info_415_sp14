## XSS Homework Grading
### Part 1 - Vulnerabilities - 12 points
Each vulnerability will be worth 1 point. To earn 100% on this section you must complete 12 of the 15 challenges. Additional challenges will be worth 1 point each for a total of 13 possible points.
Each vulnerability must call "alert(0)" within the context of the website in order to demonstrate script execution. If you are unsure whether your script is being executed within the context of the page simply perform an alert(document.cookie) and see if the session cookie appears in the pop-up dialog box. It is preferable that the injected JavaScript execute automatically when the page loads but that may not be possible in all cases. Please try to make it automatic where you can. Each answer must be in the form of a URL (link) that you could send to a victim to click on.

TL;DR - for 100% turn in 12 links that cause alert boxes to apear when a victim clicks on them or does something on the page (like mouse over the username).

### Part 2 - Exfiltration Payload - 1.5 points
You must write one additional payload for challenge 0 that successfuly exfiltrates the session cookie. This can be done by using injected JavaScript to make a request to a rogue website such as http://r7.io with the session cookie as one of the request parameters. There are other ways of accomplishing this exfiltration, whatever gets the job done and gets the session token to the attacker's server (in this case, any server). This must also be submitted in the form of a URL (link) that could be sent to a victim to click on.

### Part 3 - The Report - 6.5 points
- Description (.5 point)
	- 2 to 3 sentences describing the type of vulernability (in this case: Reflected Cross-Site Scripting), what it is, and why it's bad.
- Test Steps (3 points)
	- 3 sets of test steps for the highest challenges you solved. These must include how you found the vulnerability, and why it happened.
	- Include at least one screenshot for each test (for example - of the text box the input goes in, or what the test looks like when it succeeds)
	- If you solved 1-7, 9, 10, and 11 then you would write test steps for 9, 10, and 11 (the three highest)
	- These should be detailed enough that someone in the class who didn't solve the challenges could walk through the steps, be able to reproduce the vulnerabilities, know how they worked, and why they happened.
	- If for instance you know that the filter strips script tags but you can still get script execution through the onerror event handler of the img tag, then explain that in the test steps.
- Mitigations (3 points)
	- Give mitigation recommendations for 3 different languages/frameworks
		- ASP.NET
		- Ruby on Rails
		- PHP
	- This should include a few sentences about how to properly mitigate XSS (such as escaping user input) and a code example (should only be a line of code or two)
	- Include a link for futher reading/reference for the "developer"

### Note
Please include links to any pages, guides, tutorials, people, or anything you used to help you figure out these challenges. Please do not cheat or trade answers! If you gently/fairly help one another out make sure to credit the people that helped you in your report. Give credit where credit is due.