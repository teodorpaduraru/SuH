package com.example.myapplication;

import android.app.AlertDialog;
import android.app.Dialog;
import android.content.Context;
import android.content.DialogInterface;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.widget.EditText;

import androidx.appcompat.app.AppCompatDialogFragment;

public class LogInDialog extends AppCompatDialogFragment {
    public EditText editTextUsername;
    public EditText editTextPassword;
    public LogInDialogListener listener;

    @Override
    public Dialog onCreateDialog(Bundle savedInstanceState) {

        AlertDialog.Builder builder = new AlertDialog.Builder(getActivity());
        LayoutInflater inflater = getActivity().getLayoutInflater();

        View view = inflater.inflate(R.layout.dialog_signin, null);

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
        return builder.create();
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
