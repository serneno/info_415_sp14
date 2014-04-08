## Week 2 (April 7 to 11)
### Tuesday
- test bitsync
- go over puzzle
- cross-site scripting (XSS)
	- description
	- how it works
	- why it's so common
	- why it's bad
	- how to find it
	- how to mitigate
- reflective XSS
- stored XSS
- DOM XSS
- resources
	- https://www.owasp.org/index.php/XSS_Filter_Evasion_Cheat_Sheet
	- http://www.thespanner.co.uk/
- XSS demos

### Wednesday
- OpenSSL Heartbleed attack walkthrough

### Thursday
- filter bypass techniques
	- no spaces (encoding and slashes)
	- no script tag
	- encoding galore
	- XSS via images
	- other weirdness
- weaponsized XSS
	- exfil
	- fake login page
	- BeEF
	- XSS-Harvest
- do stuff
	- XSS exfiltration
	- filter bypassing

### Homework
- primary
	- XSS challenges
		- 10-15 challenges of increasing difficulty
		- must complete 10 for 100% (extra are extra points)
	- special payloads
		- XSS exfiltration payload
		- spoofed login page
	- pentest report
		- one overall description (3-5 sentences)
		- repro steps for 3 highest
		- mitigation recommendations
			- ASP.NET
			- PHP
			- Ruby on Rails
	- due next thursday
- secondary
	- reading on CSRF and Clickjacking
		- WAHH Chapter 13 section on "Inducing User Action" (501-515)