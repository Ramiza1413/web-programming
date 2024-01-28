## PowerPoint Generator is a smart web application that automates the creation of PowerPoint presentations.

This is my first open-source project as a CSE(AIML) student. 😀
There are so many things for improvements in this web app, so please feel free to contribute to and kindly give me some advice! 😊
(from Less emoji to modifying code or something...🙄)

## Features 🎨


* **AI-Driven Content Creation**: Utilize the power of GPT-3.5 Turbo to generate slide content based on your input.
* **Intelligent Slide Generation**: The tool intelligently proposes titles and content for each slide.
* **Customizable Themes**: Choose color themes for your presentation, giving it a personalized touch.
* **User-Friendly Interface**: Clear instructions and an intuitive design make the PowerPoint generation process seamless and straightforward.
* **Secure Authentication**: Register and log in with peace of mind, as user information is securely stored.

Clone the repo and try 🚀
You need API key, so click here if you don't have it yet.
[Setup the Secret Key and OpenAI Key 🔑](#setup-the-secret-key-and-openai-key-)

```bash
python3 myapp/flaskapp.py
```

## Demo Highlights 🎬

# Setup the Secret Key and OpenAI Key 🔑

The application uses a secret key for session management and an OpenAI key for the GPT-3.5 Turbo API.
These keys are defined as environment variables, and you can easily set them up using the provided .env.example file.

1. Locate the file named .env.example in the project directory.
2. Copy the contents of .env.example into a new file named .env.
3. Replace the placeholder values with your actual keys:
   
```
SECRET_KEY=your_secret_key
OPENAI_KEY=your_openai_key
PEXELS_API_KEY=your_pexels_key
```

Here's a brief description of each key and how to obtain them:

**SECRET_KEY**: 🔐This is used for web application security such as session management. You can create your own secure, random string for this.

**OPENAI_KEY**: 🤖This is required to access the OPENAI API. Although there's a limitation with the free version, it's sufficient for trying out this web application on your local machine. You can obtain this key by creating an account on the https://platform.openai.com.

**PEXELS_API_KEY**: 🏞️ This key is used for the free image search API provided by Pexels. It's very useful for adding creative images to your presentations. You can get this key by creating a free account on the https://www.pexels.com/api
After registering, the API key is automatically generated for you.


