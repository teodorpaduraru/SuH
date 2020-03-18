package com.example.myapplication;

import androidx.annotation.RequiresApi;
import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;
import androidx.lifecycle.OnLifecycleEvent;

import android.content.Intent;
import android.os.Build;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuInflater;
import android.view.MenuItem;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.EditText;
import android.widget.ListView;
import android.widget.TextView;
import android.widget.Toast;

import org.w3c.dom.Text;

import java.util.ArrayList;



public class MainActivity extends AppCompatActivity implements LogInDialog.LogInDialogListener {
    private EditText editTextUsername;
    private EditText editTextPassword;
    ListView listView;
    TextView rotationTextView;
    private TextView textView1;
    @Override
    protected void onCreate(final Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        listView = (ListView) findViewById(R.id.ListViewID);
        final ArrayList<String> arrayList = new ArrayList<>();
        arrayList.add("Mere");
        arrayList.add("Pere");
        arrayList.add("Portocale");
        arrayList.add("Lamai");
        arrayList.add("Gutui");
        arrayList.add("Rosii");
        textView1 = (TextView)findViewById(R.id.textView);
        ArrayAdapter arrayAdapter = new ArrayAdapter(this, android.R.layout.simple_list_item_1, arrayList);
        listView.setAdapter(arrayAdapter);
        listView.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
                Toast.makeText(MainActivity.this,"Ai apasat pe produsul!" + arrayList.get(position).toString(),Toast.LENGTH_SHORT).show();

                String mytext;
                mytext = "Ai apasat produsul: " + arrayList.get(position).toString();
                textView1.setText(mytext);
            }
        });
    }

    @Override
    protected void onRestoreInstanceState (Bundle savedInstanceState) {
        super.onRestoreInstanceState (savedInstanceState);
        textView1.setText(savedInstanceState.getString("my_text"));
    }

    @Override
    protected void onSaveInstanceState (Bundle outState) {
        outState.putString("my_text",textView1.getText().toString());
        super.onSaveInstanceState (outState);

    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu)
    {
        MenuInflater inflater = getMenuInflater();
        inflater.inflate(R.menu.menu, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item)
    {
        switch(item.getItemId())
        {
            case R.id.About:
                startActivity(new Intent(MainActivity.this,Pop.class));
                //Toast.makeText(getApplicationContext(), "Settings -> About", Toast.LENGTH_SHORT).show();
                break;
            case R.id.Help:
                Toast.makeText(getApplicationContext(), "Settings -> Help", Toast.LENGTH_SHORT).show();
                break;
            case R.id.LogIn:
                LogInDialog logInDialog = new LogInDialog();
                logInDialog.show(getSupportFragmentManager(),"example dialog");
                break;
        }
        return true;
    }
    protected void onStart()
    {
        super.onStart();
        Toast.makeText(getApplicationContext(), "onStart Called!", Toast.LENGTH_SHORT).show();
    }

    protected void onResume()
    {
        super.onResume();
        Toast.makeText(getApplicationContext(), "onResume Called!", Toast.LENGTH_SHORT).show();
    }

    protected void onRestart()
    {
        super.onRestart();
        Toast.makeText(getApplicationContext(), "onRestart Called!", Toast.LENGTH_SHORT).show();
    }

    @Override
    public void applyTexts(String username, String password) {
        //Toast.makeText(MainActivity.this, "The username is:" + username, Toast.LENGTH_SHORT).show();
    }
}
