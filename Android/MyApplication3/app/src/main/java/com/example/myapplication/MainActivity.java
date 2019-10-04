package com.example.myapplication;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
    EditText username,password;
    String name,pass;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        username=(EditText)findViewById(R.id.editText);
        password=(EditText)findViewById(R.id.editText2);
        findViewById(R.id.button).setOnClickListener(new View.OnClickListener(){

            @Override
            public void onClick(View v) {
                disp();
                Intent x = new Intent(MainActivity.this,main_page.class);
                startActivity(x);
            }
        });
    }
public void disp()
{
name=username.getText().toString();
pass=password.getText().toString();
    Toast.makeText(this, "Name :" + name+" pass : " +pass, Toast.LENGTH_LONG).show();
}
}

