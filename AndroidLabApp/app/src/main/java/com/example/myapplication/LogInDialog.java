package com.example.myapplication;

import android.app.AlertDialog;
import android.app.Dialog;
import android.content.Context;
import android.content.DialogInterface;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.preference.PreferenceManager;
import android.view.LayoutInflater;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.EditText;

import androidx.appcompat.app.AppCompatDialogFragment;

import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;

public class LogInDialog extends AppCompatDialogFragment {
    private EditText editTextUsername;
    private EditText editTextPassword;
    private LogInDialogListener listener;
    private SharedPreferences myPreferencesLogin;
    private SharedPreferences.Editor myPreferencesEditorLogin;
    private CheckBox myCheckBox;
    private Button btnLogin;

    @Override
    public Dialog onCreateDialog(Bundle savedInstanceState) {

        AlertDialog.Builder builder = new AlertDialog.Builder(getActivity());
        LayoutInflater inflater = getActivity().getLayoutInflater();

        View view = inflater.inflate(R.layout.login_popup, null);


        builder.setView(view)
                .setTitle("LogIn")
                .setNegativeButton("cancel", new DialogInterface.OnClickListener() {
                    @Override
                    public void onClick(DialogInterface dialog, int which) {

                    }
                })
                .setPositiveButton("ok", new DialogInterface.OnClickListener() {
                    @Override
                    public void onClick(DialogInterface dialog, int which) {
                        String username = editTextUsername.getText().toString();
                        String password = editTextPassword.getText().toString();
                        listener.applyTexts(username, password);
                    }
                });
        editTextUsername = view.findViewById(R.id.edit_username);
        editTextPassword = view.findViewById(R.id.edit_password);

        // shared preferences lab5
        myCheckBox = (CheckBox) view.findViewById(R.id.checkbox);
        btnLogin = (Button) view.findViewById(R.id.btnLogin);

        myPreferencesLogin = PreferenceManager.getDefaultSharedPreferences(this.getContext());
        myPreferencesEditorLogin = myPreferencesLogin.edit();

        checkSharedPreferencesLogin();

        btnLogin.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if(myCheckBox.isChecked())
                {
                    myPreferencesEditorLogin.putString(getString(R.string.checkbox),"True");
                    myPreferencesEditorLogin.apply();

                    String nameLogin = editTextUsername.getText().toString();
                    myPreferencesEditorLogin.putString(getString(R.string.username),nameLogin);
                    myPreferencesEditorLogin.apply();

                    String passLogin = editTextPassword.getText().toString();
                    myPreferencesEditorLogin.putString(getString(R.string.password),passLogin);
                    myPreferencesEditorLogin.apply();

                    String fileContents = "username is: " + nameLogin + " \n password is:" +passLogin;
                    try {
                        FileOutputStream fos = getContext().openFileOutput("credidentials.txt",Context.MODE_PRIVATE);
                        fos.write(fileContents.getBytes());
                        fos.close();
                    } catch (FileNotFoundException e) {
                        e.printStackTrace();
                    } catch (IOException e) {
                        e.printStackTrace();
                    }
                }
                else
                {
                    myPreferencesEditorLogin.putString(getString(R.string.checkbox),"False");
                    myPreferencesEditorLogin.apply();

                    String nameLogin = editTextUsername.getText().toString();
                    myPreferencesEditorLogin.putString(getString(R.string.username),"");
                    myPreferencesEditorLogin.apply();

                    String passLogin = editTextPassword.getText().toString();
                    myPreferencesEditorLogin.putString(getString(R.string.password),"");
                    myPreferencesEditorLogin.apply();
                }
            }
        });
        return builder.create();
    }

    private void checkSharedPreferencesLogin()
    {
        String checkbox = myPreferencesLogin.getString(getString(R.string.checkbox), "False");
        String username = myPreferencesLogin.getString(getString(R.string.username), "");
        String password = myPreferencesLogin.getString(getString(R.string.password), "");

        editTextUsername.setText(username);
        editTextPassword.setText(password);
        if (checkbox.equals("True"))
        {
            myCheckBox.setChecked(true);
        }
        else
        {
            myCheckBox.setChecked(false);
        }
    }

    public interface LogInDialogListener{
        void applyTexts(String username, String password);
    }
    @Override
    public void onAttach(Context context) {
        super.onAttach(context);
        try {
            listener = (LogInDialogListener) context;
        } catch (Exception e) {
            throw new ClassCastException(context.toString()+"Must implement ExampleDialogListener");
        }
    }
}
