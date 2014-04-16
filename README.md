```
    _____   ____________     __ __ _________
   /  _/ | / / ____/ __ \   / // /<  / ____/
   / //  |/ / /_  / / / /  / // /_/ /___ \  
 _/ // /|  / __/ / /_/ /  /__  __/ /___/ /  
/___/_/ |_/_/    \____/     /_/ /_/_____/  
``` 

# Description
This course will cover the ins and outs of web application security from the perspectives of the developer, administrator, and attacker. We will cover attacks from the all too common Cross-Site Scripting attack through Cross-Site Request Forgery, SQL Injection, all the way to more advanced topics such as hash length extension attacks, cookie tossing, and specialized vulnerabilities against common web frameworks.
 
The goals of this course center around familiarizing students with how to recognize a possible vulnerability, write a proof-of-concept in order to demonstrate the issue, and provide helpful remediation so that a developer can properly mitigate the threat. The emphasis will be on hands on learning and the students will be expected to think creatively as they face common defenses and work with unfamiliar frameworks and languages.

# Grading
Grade breakdown:
- midterm: 20%
- final: 30%
- hw: 45%
- participation: 5%

Late penalty: 
- 10% daily 
- stops at 30% deduction				
                                            

# Weekly Schedule

## Week 1 (March 31 to April 4)
### Tuesday
- who I am and what I do
- teaching methodology
- class overview
- github
- where web application security fits into information security
- online resources for security in general
- bug bounties
- responsible disclosure
- general tips and tricks
- books
	- Web Application Hacker's Handbook
	- The Browsers Hacker's Handbook
	- Tangled Web
	- Hacking: The Art of Exploitation
	- Bug Hunter's Diary
- anatomy of a web application
	- frontend
	- middle layer
	- database
	- cookies
	- authentication
- lay of the web application land
	- web 2.0 hotness
	- MVC
	- HTML5
- the internet
	- DNS
	- routing
	- SSL/TLS
	- HTTP
	- CAs
	- browsers

### Wednesday
- session sidejacking demo
	- vuln 3rd party code
	- xss password exfil
- business logic attacks
	- scenarios
- create myspace accounts

### Thursday
- threat modeling
	- typical pentest
	- puzzle

### Homework
- primary
	- read WAHH XSS chapter (12)
	- read WAHH chapter 3
- secondary
	- read WAHH chapter 2 & 1
	- puzzle

## Week 2 (April 7 to 11)
### Tuesday
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
- XSS demos

### Wednesday
- OpenSSL Heartbleed attack walkthrough

### Thursday
- filter bypass techniques
	- no spaces (encoding and slashes)
	- no script tag
	- XSS via images
	- encoding galore
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

## Week 3 (April 14 to 18)
### Tuesday
- CSRF
	- how it works
	- why it's bad
	- how to find it
	- how to mitigate
	- special tactics
		- CSRF with flash
- CSRF examples
	- demo simple CSRF
	- demo CSRF in the wild
	- create your own!

### Wednesday
- how Tor works

### Thursday
- go over homework
- Clickjacking
	- how it works
	- why it's bad
	- how to mitigate
	- special tactics

### Homework
- CSRF proof of concept
- clickjacking proof of concept
- pentest report
- bonus: csrf and clickjacking in the wild
- read SQLi WAHH chapter
- due next thursday

## Week 4 (April 21 to 25)
### Tuesday
- SQL injection
	- how it works
	- why it's bad
	- how to find it
	- how to mitigate
	- special tactics
- xp_cmdshell
- SQLi demos
	- regular
	- blind
	- xp_cmdshell

### Wednesday
- regular expressions

### Thursday
- go over homework
- blind SQL injection
- SQL injection w/ DMBS
	- hibernate
- demo
- practice

### Homework
- 5 SQL injections
	- regular 1
	- regular 2
	- filtered
	- blind
	- hibernate
- exfiltrate passwords
- pentest report
- read crypto chapters?
- due next thursday

## Week 5 (April 28 to May 2)
### Tuesday
- cryptography
	- public/private key
	- forward secrecy
	- hashes
	- stream vs block cipher
	- algorithm modes: ECB, CBC, others
- authentication
	- walk through typical auth scheme
	- password hashing
	- set cookie
- where attacks come in
	- session fixation, session invalidation, CSRF
	- sql injection, password cracking
- do stuff
	- ssl scan
	- hash cracking

### Wednesday
- do stuff
	- bitflipping ECB auth cookie
	- ecb mode challenge?
	- ssl scan continued
	- hash cracking continued

### Thursday
- go over homework
- info leakage
- HTTP methods
- cookie entropy
- cookie settings
- combine XSS, HttpOnly cookies, and HTTP Trace
- do stuff
	- vulnerable site demoing insecure settings + XSS
	- burp repeater for entropy check

### Homework
- midterm
- due next tuesday

## Week 6 (May 5 to 9)
### Tuesday
- go over midterm
- authentication issues
	- timing attacks
	- 2 factor auth
	- single signon
	- cookie tossing
- do stuff
	- timing attack

### Wednesday
- practice 

### Thursday
- hash length extension attacks
	- detailed explanation
	- live demo walkthrough
- do stuff
	- hash length extension attacks

### Homework
- hash length extension attack
- basic timing attack
- info leakage in the wild
- << reading >>
- due next thursday

## Week 7 (May 12 to 16)
### Tuesday
- MVC frameworks
- demo a small MVC app
- mass assignment attack

### Wednesday
- weaponized XSS

### Thursday
- go over homework
- deserialization attacks

### Homework
- two mass assignment attacks
- two deserialization attacks
- build your own web worm
- << reading >>
- due next thursday

## Week 8 (May 19 to 23)
### Tuesday
- race conditions
- tricking password managers
- remote file inclusion (RFI)
- local file inclusion (LFI)
- do stuff
	- trick a password manager
	- LFI/RFI walkthrough

### Wednesday
- exploit LFI/RFI

### Thursday
- go over homework
- application server attacks
	- clusterd
	- webdav
	- tomcat
- demo
- do stuff
	- try attacks

### Homework
- none, enjoy memorial day!
- see some of you at Sasquatch

## Week 9 (May 26 to 30)
### Tuesday
- flex time

### Wednesday
- flex time

### Thursday
- flex time

### Homework
- << reading >>

## Week 10 (June 2 to 6)
### Tuesday
- review

### Wednesday
- review

### Thursday
- review

### Homework
- take your final!

## Final (Friday June 13th)
### Subject Matter: No final on this day, enjoy your summer!


# Bonus Topics
- Bitcoin
- Near Field Communication
- Buffer Overflows
- Metasploit/Armitage
- Hacking Wireless Devices
- Arp Spoofing & DNS Poisoning
- Operating Systems and Rootkits