## CSRF Homework Grading
Homework challenges can be found at: http://csrf-challenges.r7.io/

## Part 1 - Vulnerabilities 12 points
- Level 1 will be worth 2 points
- Level 2 will be worth 4 points 
- Level 3 will be worth 6 points

To earn full points on each challenge you must craft a webpage (for levels 1 & 2) and a link with an XSS payload (for level 3) that when the Admin goes to that page/link, it stealthily makes a post to the corresponding admin post page. This post must contain your student UW email.

Example: You create a webpage for Level 1 that I (as the admin) will open. This webpage needs to submit a request in order to make a post to the Level 1 post page on http://csrf-challeges.r7.io. This post is made on behalf of the Admin without them knowing. Make sure to put your UW email in the contents of the post so I can verify you.

TL;DR - for 100% you must turn in 2 pages and a URL/link that when clicked on by the admin submit a post to their respective post page (corresponding to their level). Be sure to include your UW email in the contents of the post.

## Part 2 - The Report 8 points
- Description (1 point)
- Test Steps (3 points)
	- 3 sets of test steps that include how you found the vulnerability and how it works.
	- Include at least one screenshot for each test
	- These should be detailed enough that someone in the class who didn't solve the challenges could walk through the steps, be able to reproduce the vulnerabilities, know how they worked, and why they happened.
- Mitigations (4 points)
	- Give mitigation recommendations for 2 languages/frameworks
		- APS.NET
		- Django
	- This should include a few sentences about how to properly mitigate CSRF and a code example for each framework/language
	- Include a link or two to further reading/reference for the "developer"

## Due Date
You can submit your malicious pages and link to me on Tuesday April 22nd by 5:30pm (17:30) via Catalyst and I will run them. This will allow you to verify whether your CSRF attacks worked, and if they didn't work, give you a few days to tweak them.

The whole HW (vulnerabilities and report) are due at 3:30pm (15:30) Thursday April 24th 2014

## Notes & Hints
You can practice POST and GET based CSRF attacks on both the Yazd and Damn Vulnerable Web Application sites that are part of the OWASP Broken Web Application package.

Submit forms, even if you are not authenticated, and intercept the requests with Burp. This can give you a look at what is being sent to the server, so you can re-create that request in your malicious page.

Please include links to any pages, guides, tutorials, people, or anything you used to help you figure out these challenges. Please do not cheat or trade answers! If you gently/fairly help one another out make sure to credit the people that helped you in your report. Give credit where credit is due.

No automated tools!

## Resources
http://www.troyhunt.com/2010/11/owasp-top-10-for-net-developers-part-5.html
https://www.owasp.org/index.php/Testing_for_CSRF_(OWASP-SM-005)